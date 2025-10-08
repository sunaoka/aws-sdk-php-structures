<?php

namespace Sunaoka\Aws\Structures\Personalize\ListMetricAttributions;

trait ListMetricAttributionsTrait
{
    /**
     * @param ListMetricAttributionsRequest $args
     * @return ListMetricAttributionsResponse
     */
    public function listMetricAttributions(ListMetricAttributionsRequest $args)
    {
        $result = parent::listMetricAttributions($args->toArray());
        return new ListMetricAttributionsResponse($result->toArray());
    }
}
