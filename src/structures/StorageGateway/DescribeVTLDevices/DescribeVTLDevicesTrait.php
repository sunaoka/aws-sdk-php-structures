<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeVTLDevices;

trait DescribeVTLDevicesTrait
{
    /**
     * @param DescribeVTLDevicesRequest $args
     * @return DescribeVTLDevicesResponse
     */
    public function describeVTLDevices(DescribeVTLDevicesRequest $args)
    {
        $result = parent::describeVTLDevices($args->toArray());
        return new DescribeVTLDevicesResponse($result->toArray());
    }
}
