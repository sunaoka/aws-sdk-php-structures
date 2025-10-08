<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances;

trait DescribeDeviceEc2InstancesTrait
{
    /**
     * @param DescribeDeviceEc2InstancesRequest $args
     * @return DescribeDeviceEc2InstancesResponse
     */
    public function describeDeviceEc2Instances(DescribeDeviceEc2InstancesRequest $args)
    {
        $result = parent::describeDeviceEc2Instances($args->toArray());
        return new DescribeDeviceEc2InstancesResponse($result->toArray());
    }
}
