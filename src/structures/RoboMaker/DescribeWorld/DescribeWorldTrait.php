<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorld;

trait DescribeWorldTrait
{
    /**
     * @param DescribeWorldRequest $args
     * @return DescribeWorldResponse
     */
    public function describeWorld(DescribeWorldRequest $args)
    {
        $result = parent::describeWorld($args->toArray());
        return new DescribeWorldResponse($result->toArray());
    }
}
