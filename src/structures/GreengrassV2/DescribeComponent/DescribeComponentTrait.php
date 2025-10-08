<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\DescribeComponent;

trait DescribeComponentTrait
{
    /**
     * @param DescribeComponentRequest $args
     * @return DescribeComponentResponse
     */
    public function describeComponent(DescribeComponentRequest $args)
    {
        $result = parent::describeComponent($args->toArray());
        return new DescribeComponentResponse($result->toArray());
    }
}
