<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSpotPlacementScores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRangeRequest $VCpuCount
 * @property MemoryMiBRequest $MemoryMiB
 * @property list<'intel'|'amd'|'amazon-web-services'|'apple'> $CpuManufacturers
 * @property MemoryGiBPerVCpuRequest $MemoryGiBPerVCpu
 * @property list<string> $ExcludedInstanceTypes
 * @property list<'current'|'previous'> $InstanceGenerations
 * @property int $SpotMaxPricePercentageOverLowestPrice
 * @property int $OnDemandMaxPricePercentageOverLowestPrice
 * @property 'included'|'required'|'excluded' $BareMetal
 * @property 'included'|'required'|'excluded' $BurstablePerformance
 * @property bool $RequireHibernateSupport
 * @property NetworkInterfaceCountRequest $NetworkInterfaceCount
 * @property 'included'|'required'|'excluded' $LocalStorage
 * @property list<'hdd'|'ssd'> $LocalStorageTypes
 * @property TotalLocalStorageGBRequest $TotalLocalStorageGB
 * @property BaselineEbsBandwidthMbpsRequest $BaselineEbsBandwidthMbps
 * @property list<'gpu'|'fpga'|'inference'> $AcceleratorTypes
 * @property AcceleratorCountRequest $AcceleratorCount
 * @property list<'amazon-web-services'|'amd'|'nvidia'|'xilinx'|'habana'> $AcceleratorManufacturers
 * @property list<'a100'|'inferentia'|'k520'|'k80'|'m60'|'radeon-pro-v520'|'t4'|'vu9p'|'v100'|'a10g'|'h100'|'t4g'> $AcceleratorNames
 * @property AcceleratorTotalMemoryMiBRequest $AcceleratorTotalMemoryMiB
 * @property NetworkBandwidthGbpsRequest $NetworkBandwidthGbps
 * @property list<string> $AllowedInstanceTypes
 * @property int $MaxSpotPriceAsPercentageOfOptimalOnDemandPrice
 * @property BaselinePerformanceFactorsRequest $BaselinePerformanceFactors
 */
class InstanceRequirementsRequest extends Shape
{
    /**
     * @param array{
     *     VCpuCount: VCpuCountRangeRequest,
     *     MemoryMiB: MemoryMiBRequest,
     *     CpuManufacturers?: list<'intel'|'amd'|'amazon-web-services'|'apple'>,
     *     MemoryGiBPerVCpu?: MemoryGiBPerVCpuRequest,
     *     ExcludedInstanceTypes?: list<string>,
     *     InstanceGenerations?: list<'current'|'previous'>,
     *     SpotMaxPricePercentageOverLowestPrice?: int,
     *     OnDemandMaxPricePercentageOverLowestPrice?: int,
     *     BareMetal?: 'included'|'required'|'excluded',
     *     BurstablePerformance?: 'included'|'required'|'excluded',
     *     RequireHibernateSupport?: bool,
     *     NetworkInterfaceCount?: NetworkInterfaceCountRequest,
     *     LocalStorage?: 'included'|'required'|'excluded',
     *     LocalStorageTypes?: list<'hdd'|'ssd'>,
     *     TotalLocalStorageGB?: TotalLocalStorageGBRequest,
     *     BaselineEbsBandwidthMbps?: BaselineEbsBandwidthMbpsRequest,
     *     AcceleratorTypes?: list<'gpu'|'fpga'|'inference'>,
     *     AcceleratorCount?: AcceleratorCountRequest,
     *     AcceleratorManufacturers?: list<'amazon-web-services'|'amd'|'nvidia'|'xilinx'|'habana'>,
     *     AcceleratorNames?: list<'a100'|'inferentia'|'k520'|'k80'|'m60'|'radeon-pro-v520'|'t4'|'vu9p'|'v100'|'a10g'|'h100'|'t4g'>,
     *     AcceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiBRequest,
     *     NetworkBandwidthGbps?: NetworkBandwidthGbpsRequest,
     *     AllowedInstanceTypes?: list<string>,
     *     MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?: int,
     *     BaselinePerformanceFactors?: BaselinePerformanceFactorsRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
