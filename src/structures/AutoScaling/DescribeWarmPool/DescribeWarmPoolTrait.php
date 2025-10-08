<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeWarmPool;

trait DescribeWarmPoolTrait
{
    /**
     * @param DescribeWarmPoolRequest $args
     * @return DescribeWarmPoolResponse
     */
    public function describeWarmPool(DescribeWarmPoolRequest $args)
    {
        $result = parent::describeWarmPool($args->toArray());
        return new DescribeWarmPoolResponse($result->toArray());
    }
}
