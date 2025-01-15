<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $amiLaunchIndex
 * @property list<InstanceBlockDeviceMapping>|null $blockDeviceMappings
 * @property CpuOptions|null $cpuOptions
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $imageId
 * @property string|null $instanceId
 * @property string|null $instanceType
 * @property string|null $privateIpAddress
 * @property string|null $publicIpAddress
 * @property string|null $rootDeviceName
 * @property list<SecurityGroupIdentifier>|null $securityGroups
 * @property InstanceState|null $state
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     amiLaunchIndex?: int|null,
     *     blockDeviceMappings?: list<InstanceBlockDeviceMapping>|null,
     *     cpuOptions?: CpuOptions|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     imageId?: string|null,
     *     instanceId?: string|null,
     *     instanceType?: string|null,
     *     privateIpAddress?: string|null,
     *     publicIpAddress?: string|null,
     *     rootDeviceName?: string|null,
     *     securityGroups?: list<SecurityGroupIdentifier>|null,
     *     state?: InstanceState|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
