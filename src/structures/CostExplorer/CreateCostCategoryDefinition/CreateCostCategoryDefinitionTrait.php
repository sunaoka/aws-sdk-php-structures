<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateCostCategoryDefinition;

trait CreateCostCategoryDefinitionTrait
{
    /**
     * @param CreateCostCategoryDefinitionRequest $args
     * @return CreateCostCategoryDefinitionResponse
     */
    public function createCostCategoryDefinition(CreateCostCategoryDefinitionRequest $args)
    {
        $result = parent::createCostCategoryDefinition($args->toArray());
        return new CreateCostCategoryDefinitionResponse($result->toArray());
    }
}
