<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $instanceIds
 * @property string $managedDeviceId
 */
class DescribeDeviceEc2InstancesRequest extends Request
{
    /**
     * @param array{
     *     instanceIds: list<string>,
     *     managedDeviceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
