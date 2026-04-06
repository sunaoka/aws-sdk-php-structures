<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRangeRequest $vCpuCount
 * @property MemoryMiBRequest $memoryMiB
 * @property list<'intel'|'amd'|'amazon-web-services'>|null $cpuManufacturers
 * @property MemoryGiBPerVCpuRequest|null $memoryGiBPerVCpu
 * @property list<string>|null $excludedInstanceTypes
 * @property list<'current'|'previous'>|null $instanceGenerations
 * @property int|null $spotMaxPricePercentageOverLowestPrice
 * @property int|null $onDemandMaxPricePercentageOverLowestPrice
 * @property 'included'|'required'|'excluded'|null $bareMetal
 * @property 'included'|'required'|'excluded'|null $burstablePerformance
 * @property bool|null $requireHibernateSupport
 * @property NetworkInterfaceCountRequest|null $networkInterfaceCount
 * @property 'included'|'required'|'excluded'|null $localStorage
 * @property list<'hdd'|'ssd'>|null $localStorageTypes
 * @property TotalLocalStorageGBRequest|null $totalLocalStorageGB
 * @property BaselineEbsBandwidthMbpsRequest|null $baselineEbsBandwidthMbps
 * @property list<'gpu'|'fpga'|'inference'>|null $acceleratorTypes
 * @property AcceleratorCountRequest|null $acceleratorCount
 * @property list<'amazon-web-services'|'amd'|'nvidia'|'xilinx'|'habana'>|null $acceleratorManufacturers
 * @property list<'a100'|'inferentia'|'k520'|'k80'|'m60'|'radeon-pro-v520'|'t4'|'vu9p'|'v100'|'a10g'|'h100'|'t4g'>|null $acceleratorNames
 * @property AcceleratorTotalMemoryMiBRequest|null $acceleratorTotalMemoryMiB
 * @property NetworkBandwidthGbpsRequest|null $networkBandwidthGbps
 * @property list<string>|null $allowedInstanceTypes
 * @property int|null $maxSpotPriceAsPercentageOfOptimalOnDemandPrice
 */
class InstanceRequirementsRequest extends Shape
{
    /**
     * @param array{
     *     vCpuCount: VCpuCountRangeRequest,
     *     memoryMiB: MemoryMiBRequest,
     *     cpuManufacturers?: list<'intel'|'amd'|'amazon-web-services'>|null,
     *     memoryGiBPerVCpu?: MemoryGiBPerVCpuRequest|null,
     *     excludedInstanceTypes?: list<string>|null,
     *     instanceGenerations?: list<'current'|'previous'>|null,
     *     spotMaxPricePercentageOverLowestPrice?: int|null,
     *     onDemandMaxPricePercentageOverLowestPrice?: int|null,
     *     bareMetal?: 'included'|'required'|'excluded'|null,
     *     burstablePerformance?: 'included'|'required'|'excluded'|null,
     *     requireHibernateSupport?: bool|null,
     *     networkInterfaceCount?: NetworkInterfaceCountRequest|null,
     *     localStorage?: 'included'|'required'|'excluded'|null,
     *     localStorageTypes?: list<'hdd'|'ssd'>|null,
     *     totalLocalStorageGB?: TotalLocalStorageGBRequest|null,
     *     baselineEbsBandwidthMbps?: BaselineEbsBandwidthMbpsRequest|null,
     *     acceleratorTypes?: list<'gpu'|'fpga'|'inference'>|null,
     *     acceleratorCount?: AcceleratorCountRequest|null,
     *     acceleratorManufacturers?: list<'amazon-web-services'|'amd'|'nvidia'|'xilinx'|'habana'>|null,
     *     acceleratorNames?: list<'a100'|'inferentia'|'k520'|'k80'|'m60'|'radeon-pro-v520'|'t4'|'vu9p'|'v100'|'a10g'|'h100'|'t4g'>|null,
     *     acceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiBRequest|null,
     *     networkBandwidthGbps?: NetworkBandwidthGbpsRequest|null,
     *     allowedInstanceTypes?: list<string>|null,
     *     maxSpotPriceAsPercentageOfOptimalOnDemandPrice?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
