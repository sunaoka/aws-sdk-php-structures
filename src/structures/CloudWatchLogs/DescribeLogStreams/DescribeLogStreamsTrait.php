<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogStreams;

trait DescribeLogStreamsTrait
{
    /**
     * @param DescribeLogStreamsRequest $args
     * @return DescribeLogStreamsResponse
     */
    public function describeLogStreams(DescribeLogStreamsRequest $args)
    {
        $result = parent::describeLogStreams($args->toArray());
        return new DescribeLogStreamsResponse($result->toArray());
    }
}
