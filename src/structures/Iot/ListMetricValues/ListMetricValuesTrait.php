<?php

namespace Sunaoka\Aws\Structures\Iot\ListMetricValues;

trait ListMetricValuesTrait
{
    /**
     * @param ListMetricValuesRequest $args
     * @return ListMetricValuesResponse
     */
    public function listMetricValues(ListMetricValuesRequest $args)
    {
        $result = parent::listMetricValues($args->toArray());
        return new ListMetricValuesResponse($result->toArray());
    }
}
