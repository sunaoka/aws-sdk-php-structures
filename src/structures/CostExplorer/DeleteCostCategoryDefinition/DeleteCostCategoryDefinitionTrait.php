<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DeleteCostCategoryDefinition;

trait DeleteCostCategoryDefinitionTrait
{
    /**
     * @param DeleteCostCategoryDefinitionRequest $args
     * @return DeleteCostCategoryDefinitionResponse
     */
    public function deleteCostCategoryDefinition(DeleteCostCategoryDefinitionRequest $args)
    {
        $result = parent::deleteCostCategoryDefinition($args->toArray());
        return new DeleteCostCategoryDefinitionResponse($result->toArray());
    }
}
