<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostCategories;

trait GetCostCategoriesTrait
{
    /**
     * @param GetCostCategoriesRequest $args
     * @return GetCostCategoriesResponse
     */
    public function getCostCategories(GetCostCategoriesRequest $args)
    {
        $result = parent::getCostCategories($args->toArray());
        return new GetCostCategoriesResponse($result->toArray());
    }
}
