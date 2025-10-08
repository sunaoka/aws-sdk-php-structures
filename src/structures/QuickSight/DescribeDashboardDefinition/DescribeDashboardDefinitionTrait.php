<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition;

trait DescribeDashboardDefinitionTrait
{
    /**
     * @param DescribeDashboardDefinitionRequest $args
     * @return DescribeDashboardDefinitionResponse
     */
    public function describeDashboardDefinition(DescribeDashboardDefinitionRequest $args)
    {
        $result = parent::describeDashboardDefinition($args->toArray());
        return new DescribeDashboardDefinitionResponse($result->toArray());
    }
}
