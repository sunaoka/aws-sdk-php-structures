<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricDataQueryDefinition;

trait GetMetricDataQueryDefinitionTrait
{
    /**
     * @param GetMetricDataQueryDefinitionRequest $args
     * @return GetMetricDataQueryDefinitionResponse
     */
    public function getMetricDataQueryDefinition(GetMetricDataQueryDefinitionRequest $args)
    {
        $result = parent::getMetricDataQueryDefinition($args->toArray());
        return new GetMetricDataQueryDefinitionResponse($result->toArray());
    }
}
