<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteMetricDataQueryDefinition;

trait DeleteMetricDataQueryDefinitionTrait
{
    /**
     * @param DeleteMetricDataQueryDefinitionRequest $args
     * @return DeleteMetricDataQueryDefinitionResponse
     */
    public function deleteMetricDataQueryDefinition(DeleteMetricDataQueryDefinitionRequest $args)
    {
        $result = parent::deleteMetricDataQueryDefinition($args->toArray());
        return new DeleteMetricDataQueryDefinitionResponse($result->toArray());
    }
}
