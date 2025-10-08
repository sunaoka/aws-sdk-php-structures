<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostCategoryDefinitions;

trait ListCostCategoryDefinitionsTrait
{
    /**
     * @param ListCostCategoryDefinitionsRequest $args
     * @return ListCostCategoryDefinitionsResponse
     */
    public function listCostCategoryDefinitions(ListCostCategoryDefinitionsRequest $args)
    {
        $result = parent::listCostCategoryDefinitions($args->toArray());
        return new ListCostCategoryDefinitionsResponse($result->toArray());
    }
}
