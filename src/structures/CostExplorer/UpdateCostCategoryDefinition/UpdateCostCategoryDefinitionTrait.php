<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostCategoryDefinition;

trait UpdateCostCategoryDefinitionTrait
{
    /**
     * @param UpdateCostCategoryDefinitionRequest $args
     * @return UpdateCostCategoryDefinitionResponse
     */
    public function updateCostCategoryDefinition(UpdateCostCategoryDefinitionRequest $args)
    {
        $result = parent::updateCostCategoryDefinition($args->toArray());
        return new UpdateCostCategoryDefinitionResponse($result->toArray());
    }
}
