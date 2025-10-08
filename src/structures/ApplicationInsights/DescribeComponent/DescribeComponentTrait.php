<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeComponent;

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
