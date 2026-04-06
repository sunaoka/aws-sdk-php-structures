<?php

namespace Sunaoka\Aws\Structures\AutoScaling\StartInstanceRefresh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRequest $VCpuCount
 * @property MemoryMiBRequest $MemoryMiB
 * @property list<'intel'|'amd'|'amazon-web-services'|'apple'>|null $CpuManufacturers
 * @property MemoryGiBPerVCpuRequest|null $MemoryGiBPerVCpu
 * @property list<string>|null $ExcludedInstanceTypes
 * @property list<'current'|'previous'>|null $InstanceGenerations
 * @property int<0, max>|null $SpotMaxPricePercentageOverLowestPrice
 * @property int<0, max>|null $MaxSpotPriceAsPercentageOfOptimalOnDemandPrice
 * @property int<0, max>|null $OnDemandMaxPricePercentageOverLowestPrice
 * @property 'included'|'excluded'|'required'|null $BareMetal
 * @property 'included'|'excluded'|'required'|null $BurstablePerformance
 * @property bool|null $RequireHibernateSupport
 * @property NetworkInterfaceCountRequest|null $NetworkInterfaceCount
 * @property 'included'|'excluded'|'required'|null $LocalStorage
 * @property list<'hdd'|'ssd'>|null $LocalStorageTypes
 * @property TotalLocalStorageGBRequest|null $TotalLocalStorageGB
 * @property BaselineEbsBandwidthMbpsRequest|null $BaselineEbsBandwidthMbps
 * @property list<'gpu'|'fpga'|'inference'>|null $AcceleratorTypes
 * @property AcceleratorCountRequest|null $AcceleratorCount
 * @property list<'nvidia'|'amd'|'amazon-web-services'|'xilinx'>|null $AcceleratorManufacturers
 * @property list<'a100'|'v100'|'k80'|'t4'|'m60'|'radeon-pro-v520'|'vu9p'>|null $AcceleratorNames
 * @property AcceleratorTotalMemoryMiBRequest|null $AcceleratorTotalMemoryMiB
 * @property NetworkBandwidthGbpsRequest|null $NetworkBandwidthGbps
 * @property list<string>|null $AllowedInstanceTypes
 * @property BaselinePerformanceFactorsRequest|null $BaselinePerformanceFactors
 */
class InstanceRequirements extends Shape
{
    /**
     * @param array{
     *     VCpuCount: VCpuCountRequest,
     *     MemoryMiB: MemoryMiBRequest,
     *     CpuManufacturers?: list<'intel'|'amd'|'amazon-web-services'|'apple'>|null,
     *     MemoryGiBPerVCpu?: MemoryGiBPerVCpuRequest|null,
     *     ExcludedInstanceTypes?: list<string>|null,
     *     InstanceGenerations?: list<'current'|'previous'>|null,
     *     SpotMaxPricePercentageOverLowestPrice?: int<0, max>|null,
     *     MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?: int<0, max>|null,
     *     OnDemandMaxPricePercentageOverLowestPrice?: int<0, max>|null,
     *     BareMetal?: 'included'|'excluded'|'required'|null,
     *     BurstablePerformance?: 'included'|'excluded'|'required'|null,
     *     RequireHibernateSupport?: bool|null,
     *     NetworkInterfaceCount?: NetworkInterfaceCountRequest|null,
     *     LocalStorage?: 'included'|'excluded'|'required'|null,
     *     LocalStorageTypes?: list<'hdd'|'ssd'>|null,
     *     TotalLocalStorageGB?: TotalLocalStorageGBRequest|null,
     *     BaselineEbsBandwidthMbps?: BaselineEbsBandwidthMbpsRequest|null,
     *     AcceleratorTypes?: list<'gpu'|'fpga'|'inference'>|null,
     *     AcceleratorCount?: AcceleratorCountRequest|null,
     *     AcceleratorManufacturers?: list<'nvidia'|'amd'|'amazon-web-services'|'xilinx'>|null,
     *     AcceleratorNames?: list<'a100'|'v100'|'k80'|'t4'|'m60'|'radeon-pro-v520'|'vu9p'>|null,
     *     AcceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiBRequest|null,
     *     NetworkBandwidthGbps?: NetworkBandwidthGbpsRequest|null,
     *     AllowedInstanceTypes?: list<string>|null,
     *     BaselinePerformanceFactors?: BaselinePerformanceFactorsRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
