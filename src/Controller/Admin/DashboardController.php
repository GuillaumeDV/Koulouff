<?php

namespace App\Controller\Admin;

use App\Entity\Donate;
use App\Entity\Contact;
use App\Entity\Planning;
use App\Entity\Information;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Website Koulouff');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Mes Informations', 'fas fa-list', Information::class);
        yield MenuItem::linkToCrud('Mon Planning', 'fas fa-list', Planning::class);
        yield MenuItem::linkToCrud('Mes liens de donation', 'fas fa-list', Donate::class);
        yield MenuItem::linkToCrud('Message reçu', 'fas fa-list', Contact::class);
    }
}
