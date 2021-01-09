<?php

namespace App\Entity;

use App\Repository\PlanningRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlanningRepository::class)
 */
class Planning
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $day;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $startHour;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $endHour;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $game;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $streamTitle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(string $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function getStartHour(): ?string
    {
        return $this->startHour;
    }

    public function setStartHour(string $startHour): self
    {
        $this->startHour = $startHour;

        return $this;
    }

    public function getEndHour(): ?string
    {
        return $this->endHour;
    }

    public function setEndHour(?string $endHour): self
    {
        $this->endHour = $endHour;

        return $this;
    }

    public function getGame(): ?string
    {
        return $this->game;
    }

    public function setGame(?string $game): self
    {
        $this->game = $game;

        return $this;
    }

    public function getStreamTitle(): ?string
    {
        return $this->streamTitle;
    }

    public function setStreamTitle(?string $streamTitle): self
    {
        $this->streamTitle = $streamTitle;

        return $this;
    }
}
