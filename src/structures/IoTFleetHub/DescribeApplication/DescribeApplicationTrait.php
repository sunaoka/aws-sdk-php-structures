<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\DescribeApplication;

trait DescribeApplicationTrait
{
    /**
     * @param DescribeApplicationRequest $args
     * @return DescribeApplicationResponse
     */
    public function describeApplication(DescribeApplicationRequest $args)
    {
        $result = parent::describeApplication($args->toArray());
        return new DescribeApplicationResponse($result->toArray());
    }
}
