<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostCategoryResourceAssociations;

trait ListCostCategoryResourceAssociationsTrait
{
    /**
     * @param ListCostCategoryResourceAssociationsRequest $args
     * @return ListCostCategoryResourceAssociationsResponse
     */
    public function listCostCategoryResourceAssociations(ListCostCategoryResourceAssociationsRequest $args)
    {
        $result = parent::listCostCategoryResourceAssociations($args->toArray());
        return new ListCostCategoryResourceAssociationsResponse($result->toArray());
    }
}
