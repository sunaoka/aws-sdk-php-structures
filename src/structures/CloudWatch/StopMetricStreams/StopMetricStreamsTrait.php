<?php

namespace Sunaoka\Aws\Structures\CloudWatch\StopMetricStreams;

trait StopMetricStreamsTrait
{
    /**
     * @param StopMetricStreamsRequest $args
     * @return StopMetricStreamsResponse
     */
    public function stopMetricStreams(StopMetricStreamsRequest $args)
    {
        $result = parent::stopMetricStreams($args->toArray());
        return new StopMetricStreamsResponse($result->toArray());
    }
}
