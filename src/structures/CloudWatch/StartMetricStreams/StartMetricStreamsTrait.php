<?php

namespace Sunaoka\Aws\Structures\CloudWatch\StartMetricStreams;

trait StartMetricStreamsTrait
{
    /**
     * @param StartMetricStreamsRequest $args
     * @return StartMetricStreamsResponse
     */
    public function startMetricStreams(StartMetricStreamsRequest $args)
    {
        $result = parent::startMetricStreams($args->toArray());
        return new StartMetricStreamsResponse($result->toArray());
    }
}
