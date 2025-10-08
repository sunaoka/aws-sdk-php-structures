<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricStream;

trait GetMetricStreamTrait
{
    /**
     * @param GetMetricStreamRequest $args
     * @return GetMetricStreamResponse
     */
    public function getMetricStream(GetMetricStreamRequest $args)
    {
        $result = parent::getMetricStream($args->toArray());
        return new GetMetricStreamResponse($result->toArray());
    }
}
