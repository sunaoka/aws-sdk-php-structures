<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRange $vCpuCount
 * @property MemoryMiBRange $memoryMiB
 * @property 'WINDOWS'|'LINUX' $osFamily
 * @property 'x86_64'|'arm64' $cpuArchitectureType
 * @property Ec2EbsVolume $rootEbsVolume
 * @property AcceleratorCapabilities $acceleratorCapabilities
 * @property list<string> $allowedInstanceTypes
 * @property list<string> $excludedInstanceTypes
 * @property list<FleetAmountCapability> $customAmounts
 * @property list<FleetAttributeCapability> $customAttributes
 */
class ServiceManagedEc2InstanceCapabilities extends Shape
{
    /**
     * @param array{
     *     vCpuCount: VCpuCountRange,
     *     memoryMiB: MemoryMiBRange,
     *     osFamily: 'WINDOWS'|'LINUX',
     *     cpuArchitectureType: 'x86_64'|'arm64',
     *     rootEbsVolume?: Ec2EbsVolume,
     *     acceleratorCapabilities?: AcceleratorCapabilities,
     *     allowedInstanceTypes?: list<string>,
     *     excludedInstanceTypes?: list<string>,
     *     customAmounts?: list<FleetAmountCapability>,
     *     customAttributes?: list<FleetAttributeCapability>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
