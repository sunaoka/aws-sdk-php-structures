<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListMetricStreams;

trait ListMetricStreamsTrait
{
    /**
     * @param ListMetricStreamsRequest $args
     * @return ListMetricStreamsResponse
     */
    public function listMetricStreams(ListMetricStreamsRequest $args)
    {
        $result = parent::listMetricStreams($args->toArray());
        return new ListMetricStreamsResponse($result->toArray());
    }
}
