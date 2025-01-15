<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsAcceleratorCountDetails|null $AcceleratorCount
 * @property list<string>|null $AcceleratorManufacturers
 * @property list<string>|null $AcceleratorNames
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsAcceleratorTotalMemoryMiBDetails|null $AcceleratorTotalMemoryMiB
 * @property list<string>|null $AcceleratorTypes
 * @property string|null $BareMetal
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsBaselineEbsBandwidthMbpsDetails|null $BaselineEbsBandwidthMbps
 * @property string|null $BurstablePerformance
 * @property list<string>|null $CpuManufacturers
 * @property list<string>|null $ExcludedInstanceTypes
 * @property list<string>|null $InstanceGenerations
 * @property string|null $LocalStorage
 * @property list<string>|null $LocalStorageTypes
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsMemoryGiBPerVCpuDetails|null $MemoryGiBPerVCpu
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsMemoryMiBDetails|null $MemoryMiB
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsNetworkInterfaceCountDetails|null $NetworkInterfaceCount
 * @property int|null $OnDemandMaxPricePercentageOverLowestPrice
 * @property bool|null $RequireHibernateSupport
 * @property int|null $SpotMaxPricePercentageOverLowestPrice
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsTotalLocalStorageGBDetails|null $TotalLocalStorageGB
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsVCpuCountDetails|null $VCpuCount
 */
class AwsEc2LaunchTemplateDataInstanceRequirementsDetails extends Shape
{
    /**
     * @param array{
     *     AcceleratorCount?: AwsEc2LaunchTemplateDataInstanceRequirementsAcceleratorCountDetails|null,
     *     AcceleratorManufacturers?: list<string>|null,
     *     AcceleratorNames?: list<string>|null,
     *     AcceleratorTotalMemoryMiB?: AwsEc2LaunchTemplateDataInstanceRequirementsAcceleratorTotalMemoryMiBDetails|null,
     *     AcceleratorTypes?: list<string>|null,
     *     BareMetal?: string|null,
     *     BaselineEbsBandwidthMbps?: AwsEc2LaunchTemplateDataInstanceRequirementsBaselineEbsBandwidthMbpsDetails|null,
     *     BurstablePerformance?: string|null,
     *     CpuManufacturers?: list<string>|null,
     *     ExcludedInstanceTypes?: list<string>|null,
     *     InstanceGenerations?: list<string>|null,
     *     LocalStorage?: string|null,
     *     LocalStorageTypes?: list<string>|null,
     *     MemoryGiBPerVCpu?: AwsEc2LaunchTemplateDataInstanceRequirementsMemoryGiBPerVCpuDetails|null,
     *     MemoryMiB?: AwsEc2LaunchTemplateDataInstanceRequirementsMemoryMiBDetails|null,
     *     NetworkInterfaceCount?: AwsEc2LaunchTemplateDataInstanceRequirementsNetworkInterfaceCountDetails|null,
     *     OnDemandMaxPricePercentageOverLowestPrice?: int|null,
     *     RequireHibernateSupport?: bool|null,
     *     SpotMaxPricePercentageOverLowestPrice?: int|null,
     *     TotalLocalStorageGB?: AwsEc2LaunchTemplateDataInstanceRequirementsTotalLocalStorageGBDetails|null,
     *     VCpuCount?: AwsEc2LaunchTemplateDataInstanceRequirementsVCpuCountDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
