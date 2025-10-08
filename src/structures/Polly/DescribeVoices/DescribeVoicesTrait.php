<?php

namespace Sunaoka\Aws\Structures\Polly\DescribeVoices;

trait DescribeVoicesTrait
{
    /**
     * @param DescribeVoicesRequest $args
     * @return DescribeVoicesResponse
     */
    public function describeVoices(DescribeVoicesRequest $args)
    {
        $result = parent::describeVoices($args->toArray());
        return new DescribeVoicesResponse($result->toArray());
    }
}
