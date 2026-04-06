<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AcceleratorCountRange|null $acceleratorCount
 * @property AcceleratorTotalMemoryMiBRange|null $acceleratorTotalMemoryMiB
 * @property list<'gpu'>|null $acceleratorTypes
 * @property 'x86_64'|'arm64' $cpuArchitectureType
 * @property list<FleetAmountCapability>|null $customAmounts
 * @property list<FleetAttributeCapability>|null $customAttributes
 * @property MemoryMiBRange $memoryMiB
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property VCpuCountRange $vCpuCount
 */
class CustomerManagedWorkerCapabilities extends Shape
{
    /**
     * @param array{
     *     acceleratorCount?: AcceleratorCountRange|null,
     *     acceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiBRange|null,
     *     acceleratorTypes?: list<'gpu'>|null,
     *     cpuArchitectureType: 'x86_64'|'arm64',
     *     customAmounts?: list<FleetAmountCapability>|null,
     *     customAttributes?: list<FleetAttributeCapability>|null,
     *     memoryMiB: MemoryMiBRange,
     *     osFamily: 'WINDOWS'|'LINUX'|'MACOS',
     *     vCpuCount: VCpuCountRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
