<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRequest $VCpuCount
 * @property MemoryMiBRequest $MemoryMiB
 * @property list<'intel'|'amd'|'amazon-web-services'> $CpuManufacturers
 * @property MemoryGiBPerVCpuRequest $MemoryGiBPerVCpu
 * @property list<string> $ExcludedInstanceTypes
 * @property list<'current'|'previous'> $InstanceGenerations
 * @property int $SpotMaxPricePercentageOverLowestPrice
 * @property int $MaxSpotPriceAsPercentageOfOptimalOnDemandPrice
 * @property int $OnDemandMaxPricePercentageOverLowestPrice
 * @property 'included'|'excluded'|'required' $BareMetal
 * @property 'included'|'excluded'|'required' $BurstablePerformance
 * @property bool $RequireHibernateSupport
 * @property NetworkInterfaceCountRequest $NetworkInterfaceCount
 * @property 'included'|'excluded'|'required' $LocalStorage
 * @property list<'hdd'|'ssd'> $LocalStorageTypes
 * @property TotalLocalStorageGBRequest $TotalLocalStorageGB
 * @property BaselineEbsBandwidthMbpsRequest $BaselineEbsBandwidthMbps
 * @property list<'gpu'|'fpga'|'inference'> $AcceleratorTypes
 * @property AcceleratorCountRequest $AcceleratorCount
 * @property list<'nvidia'|'amd'|'amazon-web-services'|'xilinx'> $AcceleratorManufacturers
 * @property list<'a100'|'v100'|'k80'|'t4'|'m60'|'radeon-pro-v520'|'vu9p'> $AcceleratorNames
 * @property AcceleratorTotalMemoryMiBRequest $AcceleratorTotalMemoryMiB
 * @property NetworkBandwidthGbpsRequest $NetworkBandwidthGbps
 * @property list<string> $AllowedInstanceTypes
 * @property BaselinePerformanceFactorsRequest $BaselinePerformanceFactors
 */
class InstanceRequirements extends Shape
{
    /**
     * @param array{
     *     VCpuCount: VCpuCountRequest,
     *     MemoryMiB: MemoryMiBRequest,
     *     CpuManufacturers?: list<'intel'|'amd'|'amazon-web-services'>,
     *     MemoryGiBPerVCpu?: MemoryGiBPerVCpuRequest,
     *     ExcludedInstanceTypes?: list<string>,
     *     InstanceGenerations?: list<'current'|'previous'>,
     *     SpotMaxPricePercentageOverLowestPrice?: int,
     *     MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?: int,
     *     OnDemandMaxPricePercentageOverLowestPrice?: int,
     *     BareMetal?: 'included'|'excluded'|'required',
     *     BurstablePerformance?: 'included'|'excluded'|'required',
     *     RequireHibernateSupport?: bool,
     *     NetworkInterfaceCount?: NetworkInterfaceCountRequest,
     *     LocalStorage?: 'included'|'excluded'|'required',
     *     LocalStorageTypes?: list<'hdd'|'ssd'>,
     *     TotalLocalStorageGB?: TotalLocalStorageGBRequest,
     *     BaselineEbsBandwidthMbps?: BaselineEbsBandwidthMbpsRequest,
     *     AcceleratorTypes?: list<'gpu'|'fpga'|'inference'>,
     *     AcceleratorCount?: AcceleratorCountRequest,
     *     AcceleratorManufacturers?: list<'nvidia'|'amd'|'amazon-web-services'|'xilinx'>,
     *     AcceleratorNames?: list<'a100'|'v100'|'k80'|'t4'|'m60'|'radeon-pro-v520'|'vu9p'>,
     *     AcceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiBRequest,
     *     NetworkBandwidthGbps?: NetworkBandwidthGbpsRequest,
     *     AllowedInstanceTypes?: list<string>,
     *     BaselinePerformanceFactors?: BaselinePerformanceFactorsRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
