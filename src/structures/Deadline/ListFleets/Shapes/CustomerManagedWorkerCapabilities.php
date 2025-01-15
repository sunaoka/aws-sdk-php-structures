<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRange $vCpuCount
 * @property MemoryMiBRange $memoryMiB
 * @property list<'gpu'>|null $acceleratorTypes
 * @property AcceleratorCountRange|null $acceleratorCount
 * @property AcceleratorTotalMemoryMiBRange|null $acceleratorTotalMemoryMiB
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property 'x86_64'|'arm64' $cpuArchitectureType
 * @property list<FleetAmountCapability>|null $customAmounts
 * @property list<FleetAttributeCapability>|null $customAttributes
 */
class CustomerManagedWorkerCapabilities extends Shape
{
    /**
     * @param array{
     *     vCpuCount: VCpuCountRange,
     *     memoryMiB: MemoryMiBRange,
     *     acceleratorTypes?: list<'gpu'>|null,
     *     acceleratorCount?: AcceleratorCountRange|null,
     *     acceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiBRange|null,
     *     osFamily: 'WINDOWS'|'LINUX'|'MACOS',
     *     cpuArchitectureType: 'x86_64'|'arm64',
     *     customAmounts?: list<FleetAmountCapability>|null,
     *     customAttributes?: list<FleetAttributeCapability>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
