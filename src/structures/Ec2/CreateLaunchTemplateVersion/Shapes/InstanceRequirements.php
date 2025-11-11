<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VCpuCountRange|null $VCpuCount
 * @property MemoryMiB|null $MemoryMiB
 * @property list<'intel'|'amd'|'amazon-web-services'|'apple'>|null $CpuManufacturers
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
 * @property list<'amazon-web-services'|'amd'|'nvidia'|'xilinx'|'habana'>|null $AcceleratorManufacturers
 * @property list<'a100'|'inferentia'|'k520'|'k80'|'m60'|'radeon-pro-v520'|'t4'|'vu9p'|'v100'|'a10g'|'h100'|'t4g'>|null $AcceleratorNames
 * @property AcceleratorTotalMemoryMiB|null $AcceleratorTotalMemoryMiB
 * @property NetworkBandwidthGbps|null $NetworkBandwidthGbps
 * @property list<string>|null $AllowedInstanceTypes
 * @property int|null $MaxSpotPriceAsPercentageOfOptimalOnDemandPrice
 * @property BaselinePerformanceFactors|null $BaselinePerformanceFactors
 * @property bool|null $RequireEncryptionInTransit
 */
class InstanceRequirements extends Shape
{
    /**
     * @param array{
     *     VCpuCount?: VCpuCountRange|null,
     *     MemoryMiB?: MemoryMiB|null,
     *     CpuManufacturers?: list<'intel'|'amd'|'amazon-web-services'|'apple'>|null,
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
     *     AcceleratorManufacturers?: list<'amazon-web-services'|'amd'|'nvidia'|'xilinx'|'habana'>|null,
     *     AcceleratorNames?: list<'a100'|'inferentia'|'k520'|'k80'|'m60'|'radeon-pro-v520'|'t4'|'vu9p'|'v100'|'a10g'|'h100'|'t4g'>|null,
     *     AcceleratorTotalMemoryMiB?: AcceleratorTotalMemoryMiB|null,
     *     NetworkBandwidthGbps?: NetworkBandwidthGbps|null,
     *     AllowedInstanceTypes?: list<string>|null,
     *     MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?: int|null,
     *     BaselinePerformanceFactors?: BaselinePerformanceFactors|null,
     *     RequireEncryptionInTransit?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
