<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySpotFleetRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRange|null $VCpuCount
 * @property MemoryMiB|null $MemoryMiB
 * @property list<'intel'|'amd'|'amazon-web-services'>|null $CpuManufacturers
 * @property MemoryGiBPerVCpu|null $MemoryGiBPerVCpu
 * @property list<string>|null $ExcludedInstanceTypes
 * @property list<'current'|'previous'>|null $InstanceGenerations
 * @property int|null $SpotMaxPricePercentageOverLowestPrice
 * @property int|null $OnDemandMaxPricePercentageOverLowestPrice
 * @property 'included'|'required'|'excluded'|null $BareMetal
 * @property 'included'|'required'|'excluded'|null $BurstablePerformance
 * @property bool|null $RequireHibernateSupport
 * @property NetworkInterfaceCount|null $NetworkInterfaceCount
 * @property 'included'|'required'|'excluded'|null $LocalStorage
 * @property list<'hdd'|'ssd'>|null $LocalStorageTypes
 * @property TotalLocalStorageGB|null $TotalLocalStorageGB
 * @property BaselineEbsBandwidthMbps|null $BaselineEbsBandwidthMbps
 * @property list<'gpu'|'fpga'|'inference'>|null $AcceleratorTypes
 * @property AcceleratorCount|null $AcceleratorCount
 * @property list<'nvidia'|'amd'|'amazon-web-services'|'xilinx'>|null $AcceleratorManufacturers
 * @property list<'a100'|'v100'|'k80'|'t4'|'m60'|'radeon-pro-v520'|'vu9p'|'inferentia'|'k520'>|null $AcceleratorNames
 * @property AcceleratorTotalMemoryMiB|null $AcceleratorTotalMemoryMiB
 * @property NetworkBandwidthGbps|null $NetworkBandwidthGbps
 * @property list<string>|null $AllowedInstanceTypes
 */
class InstanceRequirements extends Shape
{
    /**
     * @param array{
     *     VCpuCount?: VCpuCountRange|null,
     *     MemoryMiB?: MemoryMiB|null,
     *     CpuManufacturers?: list<'intel'|'amd'|'amazon-web-services'>|null,
     *     MemoryGiBPerVCpu?: MemoryGiBPerVCpu|null,
     *     ExcludedInstanceTypes?: list<string>|null,
     *     InstanceGenerations?: list<'current'|'previous'>|null,
     *     SpotMaxPricePercentageOverLowestPrice?: int|null,
     *     OnDemandMaxPricePercentageOverLowestPrice?: int|null,
     *     BareMetal?: 'included'|'required'|'excluded'|null,
     *     BurstablePerformance?: 'included'|'required'|'excluded'|null,
     *     RequireHibernateSupport?: bool|null,
     *     NetworkInterfaceCount?: NetworkInterfaceCount|null,
     *     LocalStorage?: 'included'|'required'|'excluded'|null,
     *     LocalStorageTypes?: list<'hdd'|'ssd'>|null,
     *     TotalLocalStorageGB?: TotalLocalStorageGB|null,
     *     BaselineEbsBandwidthMbps?: BaselineEbsBandwidthMbps|null,
     *     AcceleratorTypes?: list<'gpu'|'fpga'|'inference'>|null,
     *     AcceleratorCount?: AcceleratorCount|null,
     *     AcceleratorManufacturers?: list<'nvidia'|'amd'|'amazon-web-services'|'xilinx'>|null,
     *     AcceleratorNames?: list<'a100'|'v100'|'k80'|'t4'|'m60'|'radeon-pro-v520'|'vu9p'|'inferentia'|'k520'>|null,
     *     AcceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiB|null,
     *     NetworkBandwidthGbps?: NetworkBandwidthGbps|null,
     *     AllowedInstanceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
