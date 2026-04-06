<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowedInstanceTypes
 * @property 'x86_64'|'arm64' $cpuArchitectureType
 * @property list<FleetAmountCapability>|null $customAmounts
 * @property list<FleetAttributeCapability>|null $customAttributes
 * @property list<string>|null $excludedInstanceTypes
 * @property MemoryMiBRange $memoryMiB
 * @property 'WINDOWS'|'LINUX' $osFamily
 * @property Ec2EbsVolume|null $rootEbsVolume
 * @property VCpuCountRange $vCpuCount
 */
class ServiceManagedEc2InstanceCapabilities extends Shape
{
    /**
     * @param array{
     *     allowedInstanceTypes?: list<string>|null,
     *     cpuArchitectureType: 'x86_64'|'arm64',
     *     customAmounts?: list<FleetAmountCapability>|null,
     *     customAttributes?: list<FleetAttributeCapability>|null,
     *     excludedInstanceTypes?: list<string>|null,
     *     memoryMiB: MemoryMiBRange,
     *     osFamily: 'WINDOWS'|'LINUX',
     *     rootEbsVolume?: Ec2EbsVolume|null,
     *     vCpuCount: VCpuCountRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
