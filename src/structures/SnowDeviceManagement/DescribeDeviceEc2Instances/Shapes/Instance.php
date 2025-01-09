<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $amiLaunchIndex
 * @property list<InstanceBlockDeviceMapping> $blockDeviceMappings
 * @property CpuOptions $cpuOptions
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $imageId
 * @property string $instanceId
 * @property string $instanceType
 * @property string $privateIpAddress
 * @property string $publicIpAddress
 * @property string $rootDeviceName
 * @property list<SecurityGroupIdentifier> $securityGroups
 * @property InstanceState $state
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     amiLaunchIndex?: int,
     *     blockDeviceMappings?: list<InstanceBlockDeviceMapping>,
     *     cpuOptions?: CpuOptions,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     imageId?: string,
     *     instanceId?: string,
     *     instanceType?: string,
     *     privateIpAddress?: string,
     *     publicIpAddress?: string,
     *     rootDeviceName?: string,
     *     securityGroups?: list<SecurityGroupIdentifier>,
     *     state?: InstanceState,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
