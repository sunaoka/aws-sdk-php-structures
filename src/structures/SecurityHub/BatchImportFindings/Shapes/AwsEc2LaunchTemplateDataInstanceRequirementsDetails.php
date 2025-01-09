<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsAcceleratorCountDetails $AcceleratorCount
 * @property list<string> $AcceleratorManufacturers
 * @property list<string> $AcceleratorNames
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsAcceleratorTotalMemoryMiBDetails $AcceleratorTotalMemoryMiB
 * @property list<string> $AcceleratorTypes
 * @property string $BareMetal
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsBaselineEbsBandwidthMbpsDetails $BaselineEbsBandwidthMbps
 * @property string $BurstablePerformance
 * @property list<string> $CpuManufacturers
 * @property list<string> $ExcludedInstanceTypes
 * @property list<string> $InstanceGenerations
 * @property string $LocalStorage
 * @property list<string> $LocalStorageTypes
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsMemoryGiBPerVCpuDetails $MemoryGiBPerVCpu
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsMemoryMiBDetails $MemoryMiB
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsNetworkInterfaceCountDetails $NetworkInterfaceCount
 * @property int $OnDemandMaxPricePercentageOverLowestPrice
 * @property bool $RequireHibernateSupport
 * @property int $SpotMaxPricePercentageOverLowestPrice
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsTotalLocalStorageGBDetails $TotalLocalStorageGB
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsVCpuCountDetails $VCpuCount
 */
class AwsEc2LaunchTemplateDataInstanceRequirementsDetails extends Shape
{
    /**
     * @param array{
     *     AcceleratorCount?: AwsEc2LaunchTemplateDataInstanceRequirementsAcceleratorCountDetails,
     *     AcceleratorManufacturers?: list<string>,
     *     AcceleratorNames?: list<string>,
     *     AcceleratorTotalMemoryMiB?: AwsEc2LaunchTemplateDataInstanceRequirementsAcceleratorTotalMemoryMiBDetails,
     *     AcceleratorTypes?: list<string>,
     *     BareMetal?: string,
     *     BaselineEbsBandwidthMbps?: AwsEc2LaunchTemplateDataInstanceRequirementsBaselineEbsBandwidthMbpsDetails,
     *     BurstablePerformance?: string,
     *     CpuManufacturers?: list<string>,
     *     ExcludedInstanceTypes?: list<string>,
     *     InstanceGenerations?: list<string>,
     *     LocalStorage?: string,
     *     LocalStorageTypes?: list<string>,
     *     MemoryGiBPerVCpu?: AwsEc2LaunchTemplateDataInstanceRequirementsMemoryGiBPerVCpuDetails,
     *     MemoryMiB?: AwsEc2LaunchTemplateDataInstanceRequirementsMemoryMiBDetails,
     *     NetworkInterfaceCount?: AwsEc2LaunchTemplateDataInstanceRequirementsNetworkInterfaceCountDetails,
     *     OnDemandMaxPricePercentageOverLowestPrice?: int,
     *     RequireHibernateSupport?: bool,
     *     SpotMaxPricePercentageOverLowestPrice?: int,
     *     TotalLocalStorageGB?: AwsEc2LaunchTemplateDataInstanceRequirementsTotalLocalStorageGBDetails,
     *     VCpuCount?: AwsEc2LaunchTemplateDataInstanceRequirementsVCpuCountDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
