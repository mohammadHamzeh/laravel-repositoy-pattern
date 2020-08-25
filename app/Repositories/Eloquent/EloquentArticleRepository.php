<?php


namespace App\Repositories\Eloquent;


use App\Models\Article;
use App\Repositories\Contracts\ArticleRepositoryInterface;

class EloquentArticleRepository extends EloquentBaseRepository implements ArticleRepositoryInterface
{
    protected $model = Article::class;

    public function getLatestArticleOrderById()
    {
        // TODO: Implement getLatestArticleOrderById() method.
    }
}
