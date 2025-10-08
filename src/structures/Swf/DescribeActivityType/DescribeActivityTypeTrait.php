<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeActivityType;

trait DescribeActivityTypeTrait
{
    /**
     * @param DescribeActivityTypeRequest $args
     * @return DescribeActivityTypeResponse
     */
    public function describeActivityType(DescribeActivityTypeRequest $args)
    {
        $result = parent::describeActivityType($args->toArray());
        return new DescribeActivityTypeResponse($result->toArray());
    }
}
