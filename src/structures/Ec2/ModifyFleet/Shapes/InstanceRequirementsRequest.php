<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRangeRequest $VCpuCount
 * @property MemoryMiBRequest $MemoryMiB
 * @property list<'intel'|'amd'|'amazon-web-services'>|null $CpuManufacturers
 * @property MemoryGiBPerVCpuRequest|null $MemoryGiBPerVCpu
 * @property list<string>|null $ExcludedInstanceTypes
 * @property list<'current'|'previous'>|null $InstanceGenerations
 * @property int|null $SpotMaxPricePercentageOverLowestPrice
 * @property int|null $OnDemandMaxPricePercentageOverLowestPrice
 * @property 'included'|'required'|'excluded'|null $BareMetal
 * @property 'included'|'required'|'excluded'|null $BurstablePerformance
 * @property bool|null $RequireHibernateSupport
 * @property NetworkInterfaceCountRequest|null $NetworkInterfaceCount
 * @property 'included'|'required'|'excluded'|null $LocalStorage
 * @property list<'hdd'|'ssd'>|null $LocalStorageTypes
 * @property TotalLocalStorageGBRequest|null $TotalLocalStorageGB
 * @property BaselineEbsBandwidthMbpsRequest|null $BaselineEbsBandwidthMbps
 * @property list<'gpu'|'fpga'|'inference'>|null $AcceleratorTypes
 * @property AcceleratorCountRequest|null $AcceleratorCount
 * @property list<'nvidia'|'amd'|'amazon-web-services'|'xilinx'>|null $AcceleratorManufacturers
 * @property list<'a100'|'v100'|'k80'|'t4'|'m60'|'radeon-pro-v520'|'vu9p'|'inferentia'|'k520'>|null $AcceleratorNames
 * @property AcceleratorTotalMemoryMiBRequest|null $AcceleratorTotalMemoryMiB
 * @property NetworkBandwidthGbpsRequest|null $NetworkBandwidthGbps
 * @property list<string>|null $AllowedInstanceTypes
 */
class InstanceRequirementsRequest extends Shape
{
    /**
     * @param array{
     *     VCpuCount: VCpuCountRangeRequest,
     *     MemoryMiB: MemoryMiBRequest,
     *     CpuManufacturers?: list<'intel'|'amd'|'amazon-web-services'>|null,
     *     MemoryGiBPerVCpu?: MemoryGiBPerVCpuRequest|null,
     *     ExcludedInstanceTypes?: list<string>|null,
     *     InstanceGenerations?: list<'current'|'previous'>|null,
     *     SpotMaxPricePercentageOverLowestPrice?: int|null,
     *     OnDemandMaxPricePercentageOverLowestPrice?: int|null,
     *     BareMetal?: 'included'|'required'|'excluded'|null,
     *     BurstablePerformance?: 'included'|'required'|'excluded'|null,
     *     RequireHibernateSupport?: bool|null,
     *     NetworkInterfaceCount?: NetworkInterfaceCountRequest|null,
     *     LocalStorage?: 'included'|'required'|'excluded'|null,
     *     LocalStorageTypes?: list<'hdd'|'ssd'>|null,
     *     TotalLocalStorageGB?: TotalLocalStorageGBRequest|null,
     *     BaselineEbsBandwidthMbps?: BaselineEbsBandwidthMbpsRequest|null,
     *     AcceleratorTypes?: list<'gpu'|'fpga'|'inference'>|null,
     *     AcceleratorCount?: AcceleratorCountRequest|null,
     *     AcceleratorManufacturers?: list<'nvidia'|'amd'|'amazon-web-services'|'xilinx'>|null,
     *     AcceleratorNames?: list<'a100'|'v100'|'k80'|'t4'|'m60'|'radeon-pro-v520'|'vu9p'|'inferentia'|'k520'>|null,
     *     AcceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiBRequest|null,
     *     NetworkBandwidthGbps?: NetworkBandwidthGbpsRequest|null,
     *     AllowedInstanceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
