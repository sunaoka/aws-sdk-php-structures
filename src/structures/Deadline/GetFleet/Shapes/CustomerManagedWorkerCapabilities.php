<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRange $vCpuCount
 * @property MemoryMiBRange $memoryMiB
 * @property list<'gpu'> $acceleratorTypes
 * @property AcceleratorCountRange $acceleratorCount
 * @property AcceleratorTotalMemoryMiBRange $acceleratorTotalMemoryMiB
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property 'x86_64'|'arm64' $cpuArchitectureType
 * @property list<FleetAmountCapability> $customAmounts
 * @property list<FleetAttributeCapability> $customAttributes
 */
class CustomerManagedWorkerCapabilities extends Shape
{
    /**
     * @param array{
     *     vCpuCount: VCpuCountRange,
     *     memoryMiB: MemoryMiBRange,
     *     acceleratorTypes?: list<'gpu'>,
     *     acceleratorCount?: AcceleratorCountRange,
     *     acceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiBRange,
     *     osFamily: 'WINDOWS'|'LINUX'|'MACOS',
     *     cpuArchitectureType: 'x86_64'|'arm64',
     *     customAmounts?: list<FleetAmountCapability>,
     *     customAttributes?: list<FleetAttributeCapability>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
