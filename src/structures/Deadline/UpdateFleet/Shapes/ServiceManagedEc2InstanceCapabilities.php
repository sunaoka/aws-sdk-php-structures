<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRange $vCpuCount
 * @property MemoryMiBRange $memoryMiB
 * @property 'WINDOWS'|'LINUX' $osFamily
 * @property 'x86_64'|'arm64' $cpuArchitectureType
 * @property Ec2EbsVolume|null $rootEbsVolume
 * @property AcceleratorCapabilities|null $acceleratorCapabilities
 * @property list<string>|null $allowedInstanceTypes
 * @property list<string>|null $excludedInstanceTypes
 * @property list<FleetAmountCapability>|null $customAmounts
 * @property list<FleetAttributeCapability>|null $customAttributes
 */
class ServiceManagedEc2InstanceCapabilities extends Shape
{
    /**
     * @param array{
     *     vCpuCount: VCpuCountRange,
     *     memoryMiB: MemoryMiBRange,
     *     osFamily: 'WINDOWS'|'LINUX',
     *     cpuArchitectureType: 'x86_64'|'arm64',
     *     rootEbsVolume?: Ec2EbsVolume|null,
     *     acceleratorCapabilities?: AcceleratorCapabilities|null,
     *     allowedInstanceTypes?: list<string>|null,
     *     excludedInstanceTypes?: list<string>|null,
     *     customAmounts?: list<FleetAmountCapability>|null,
     *     customAttributes?: list<FleetAttributeCapability>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
