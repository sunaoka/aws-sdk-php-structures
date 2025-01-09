<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRange $VCpuCount
 * @property MemoryMiB $MemoryMiB
 * @property list<'intel'|'amd'|'amazon-web-services'|'apple'> $CpuManufacturers
 * @property MemoryGiBPerVCpu $MemoryGiBPerVCpu
 * @property list<string> $ExcludedInstanceTypes
 * @property list<'current'|'previous'> $InstanceGenerations
 * @property int $SpotMaxPricePercentageOverLowestPrice
 * @property int $OnDemandMaxPricePercentageOverLowestPrice
 * @property 'included'|'required'|'excluded' $BareMetal
 * @property 'included'|'required'|'excluded' $BurstablePerformance
 * @property bool $RequireHibernateSupport
 * @property NetworkInterfaceCount $NetworkInterfaceCount
 * @property 'included'|'required'|'excluded' $LocalStorage
 * @property list<'hdd'|'ssd'> $LocalStorageTypes
 * @property TotalLocalStorageGB $TotalLocalStorageGB
 * @property BaselineEbsBandwidthMbps $BaselineEbsBandwidthMbps
 * @property list<'gpu'|'fpga'|'inference'> $AcceleratorTypes
 * @property AcceleratorCount $AcceleratorCount
 * @property list<'amazon-web-services'|'amd'|'nvidia'|'xilinx'|'habana'> $AcceleratorManufacturers
 * @property list<'a100'|'inferentia'|'k520'|'k80'|'m60'|'radeon-pro-v520'|'t4'|'vu9p'|'v100'|'a10g'|'h100'|'t4g'> $AcceleratorNames
 * @property AcceleratorTotalMemoryMiB $AcceleratorTotalMemoryMiB
 * @property NetworkBandwidthGbps $NetworkBandwidthGbps
 * @property list<string> $AllowedInstanceTypes
 * @property int $MaxSpotPriceAsPercentageOfOptimalOnDemandPrice
 * @property BaselinePerformanceFactors $BaselinePerformanceFactors
 */
class InstanceRequirements extends Shape
{
    /**
     * @param array{
     *     VCpuCount?: VCpuCountRange,
     *     MemoryMiB?: MemoryMiB,
     *     CpuManufacturers?: list<'intel'|'amd'|'amazon-web-services'|'apple'>,
     *     MemoryGiBPerVCpu?: MemoryGiBPerVCpu,
     *     ExcludedInstanceTypes?: list<string>,
     *     InstanceGenerations?: list<'current'|'previous'>,
     *     SpotMaxPricePercentageOverLowestPrice?: int,
     *     OnDemandMaxPricePercentageOverLowestPrice?: int,
     *     BareMetal?: 'included'|'required'|'excluded',
     *     BurstablePerformance?: 'included'|'required'|'excluded',
     *     RequireHibernateSupport?: bool,
     *     NetworkInterfaceCount?: NetworkInterfaceCount,
     *     LocalStorage?: 'included'|'required'|'excluded',
     *     LocalStorageTypes?: list<'hdd'|'ssd'>,
     *     TotalLocalStorageGB?: TotalLocalStorageGB,
     *     BaselineEbsBandwidthMbps?: BaselineEbsBandwidthMbps,
     *     AcceleratorTypes?: list<'gpu'|'fpga'|'inference'>,
     *     AcceleratorCount?: AcceleratorCount,
     *     AcceleratorManufacturers?: list<'amazon-web-services'|'amd'|'nvidia'|'xilinx'|'habana'>,
     *     AcceleratorNames?: list<'a100'|'inferentia'|'k520'|'k80'|'m60'|'radeon-pro-v520'|'t4'|'vu9p'|'v100'|'a10g'|'h100'|'t4g'>,
     *     AcceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiB,
     *     NetworkBandwidthGbps?: NetworkBandwidthGbps,
     *     AllowedInstanceTypes?: list<string>,
     *     MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?: int,
     *     BaselinePerformanceFactors?: BaselinePerformanceFactors
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
