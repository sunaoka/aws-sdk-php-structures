<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DescribeCostCategoryDefinition;

trait DescribeCostCategoryDefinitionTrait
{
    /**
     * @param DescribeCostCategoryDefinitionRequest $args
     * @return DescribeCostCategoryDefinitionResponse
     */
    public function describeCostCategoryDefinition(DescribeCostCategoryDefinitionRequest $args)
    {
        $result = parent::describeCostCategoryDefinition($args->toArray());
        return new DescribeCostCategoryDefinitionResponse($result->toArray());
    }
}
