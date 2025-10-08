<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeListener;

trait DescribeListenerTrait
{
    /**
     * @param DescribeListenerRequest $args
     * @return DescribeListenerResponse
     */
    public function describeListener(DescribeListenerRequest $args)
    {
        $result = parent::describeListener($args->toArray());
        return new DescribeListenerResponse($result->toArray());
    }
}
