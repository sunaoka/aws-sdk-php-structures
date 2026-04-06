<?php

namespace Sunaoka\Aws\Structures\QApps\ListCategories;

trait ListCategoriesTrait
{
    /**
     * @param ListCategoriesRequest $args
     * @return ListCategoriesResponse
     */
    public function listCategories(ListCategoriesRequest $args)
    {
        $result = parent::listCategories($args->toArray());
        return new ListCategoriesResponse($result->toArray());
    }
}
