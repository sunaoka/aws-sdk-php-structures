<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDefaultQBusinessApplication;

trait DescribeDefaultQBusinessApplicationTrait
{
    /**
     * @param DescribeDefaultQBusinessApplicationRequest $args
     * @return DescribeDefaultQBusinessApplicationResponse
     */
    public function describeDefaultQBusinessApplication(DescribeDefaultQBusinessApplicationRequest $args)
    {
        $result = parent::describeDefaultQBusinessApplication($args->toArray());
        return new DescribeDefaultQBusinessApplicationResponse($result->toArray());
    }
}
