<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricStream;

trait PutMetricStreamTrait
{
    /**
     * @param PutMetricStreamRequest $args
     * @return PutMetricStreamResponse
     */
    public function putMetricStream(PutMetricStreamRequest $args)
    {
        $result = parent::putMetricStream($args->toArray());
        return new PutMetricStreamResponse($result->toArray());
    }
}
