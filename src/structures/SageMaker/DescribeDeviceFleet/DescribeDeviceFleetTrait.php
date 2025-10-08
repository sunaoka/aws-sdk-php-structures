<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDeviceFleet;

trait DescribeDeviceFleetTrait
{
    /**
     * @param DescribeDeviceFleetRequest $args
     * @return DescribeDeviceFleetResponse
     */
    public function describeDeviceFleet(DescribeDeviceFleetRequest $args)
    {
        $result = parent::describeDeviceFleet($args->toArray());
        return new DescribeDeviceFleetResponse($result->toArray());
    }
}
