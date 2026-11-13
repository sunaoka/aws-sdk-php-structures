<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListMetricDataQueryDefinitions;

trait ListMetricDataQueryDefinitionsTrait
{
    /**
     * @param ListMetricDataQueryDefinitionsRequest $args
     * @return ListMetricDataQueryDefinitionsResponse
     */
    public function listMetricDataQueryDefinitions(ListMetricDataQueryDefinitionsRequest $args)
    {
        $result = parent::listMetricDataQueryDefinitions($args->toArray());
        return new ListMetricDataQueryDefinitionsResponse($result->toArray());
    }
}
