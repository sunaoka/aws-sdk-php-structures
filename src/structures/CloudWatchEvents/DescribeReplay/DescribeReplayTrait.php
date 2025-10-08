<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeReplay;

trait DescribeReplayTrait
{
    /**
     * @param DescribeReplayRequest $args
     * @return DescribeReplayResponse
     */
    public function describeReplay(DescribeReplayRequest $args)
    {
        $result = parent::describeReplay($args->toArray());
        return new DescribeReplayResponse($result->toArray());
    }
}
