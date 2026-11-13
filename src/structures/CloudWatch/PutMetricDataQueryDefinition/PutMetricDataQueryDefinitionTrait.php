<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricDataQueryDefinition;

trait PutMetricDataQueryDefinitionTrait
{
    /**
     * @param PutMetricDataQueryDefinitionRequest $args
     * @return PutMetricDataQueryDefinitionResponse
     */
    public function putMetricDataQueryDefinition(PutMetricDataQueryDefinitionRequest $args)
    {
        $result = parent::putMetricDataQueryDefinition($args->toArray());
        return new PutMetricDataQueryDefinitionResponse($result->toArray());
    }
}
