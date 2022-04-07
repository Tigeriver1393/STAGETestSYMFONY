<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

    public const PRODUCTS_BASE_PATH = '/img/blog';
    public const PRODUCTS_UPLOAD_DIR = 'public/img/blog';

    public function configureFields(string $pageName): iterable
    {

        yield TextField::new('title');

        yield ImageField::new('cover')
            ->setBasePath(self::PRODUCTS_BASE_PATH)
            ->setUploadDir(self::PRODUCTS_UPLOAD_DIR)
            ->setSortable(false);


        yield SlugField::new('slug')
            ->setTargetFieldName('title');

        yield TextEditorField::new('content');

        yield TextField::new('featuredText');

        yield DateTimeField::new('date_created')
            ->hideOnForm();

        yield DateTimeField::new('date_updated')
            ->hideOnForm();
    }
}
