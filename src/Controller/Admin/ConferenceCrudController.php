<?php

namespace App\Controller\Admin;

use App\Entity\Conference;
use DeepCopy\Filter\Filter;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class ConferenceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Conference::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
                ->setEntityLabelInPlural('Conferences')
                ->setEntityLabelInSingular('Conferece');
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
                ->add('isInternational')
                ->add('city')
                ->add('year')
        ;
    }
}
