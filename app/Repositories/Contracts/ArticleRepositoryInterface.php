<?php


namespace App\Repositories\Contracts;


interface ArticleRepositoryInterface extends RepositoryInterface
{
    // write custom method for article

    public function getLatestArticleOrderById();
}
