<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccessControlApplication;

trait DescribeAccessControlApplicationTrait
{
    /**
     * @param DescribeAccessControlApplicationRequest $args
     * @return DescribeAccessControlApplicationResponse
     */
    public function describeAccessControlApplication(DescribeAccessControlApplicationRequest $args)
    {
        $result = parent::describeAccessControlApplication($args->toArray());
        return new DescribeAccessControlApplicationResponse($result->toArray());
    }
}
