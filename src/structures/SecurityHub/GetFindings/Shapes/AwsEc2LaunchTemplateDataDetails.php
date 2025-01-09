<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsEc2LaunchTemplateDataBlockDeviceMappingSetDetails> $BlockDeviceMappingSet
 * @property AwsEc2LaunchTemplateDataCapacityReservationSpecificationDetails $CapacityReservationSpecification
 * @property AwsEc2LaunchTemplateDataCpuOptionsDetails $CpuOptions
 * @property AwsEc2LaunchTemplateDataCreditSpecificationDetails $CreditSpecification
 * @property bool $DisableApiStop
 * @property bool $DisableApiTermination
 * @property bool $EbsOptimized
 * @property list<AwsEc2LaunchTemplateDataElasticGpuSpecificationSetDetails> $ElasticGpuSpecificationSet
 * @property list<AwsEc2LaunchTemplateDataElasticInferenceAcceleratorSetDetails> $ElasticInferenceAcceleratorSet
 * @property AwsEc2LaunchTemplateDataEnclaveOptionsDetails $EnclaveOptions
 * @property AwsEc2LaunchTemplateDataHibernationOptionsDetails $HibernationOptions
 * @property AwsEc2LaunchTemplateDataIamInstanceProfileDetails $IamInstanceProfile
 * @property string $ImageId
 * @property string $InstanceInitiatedShutdownBehavior
 * @property AwsEc2LaunchTemplateDataInstanceMarketOptionsDetails $InstanceMarketOptions
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsDetails $InstanceRequirements
 * @property string $InstanceType
 * @property string $KernelId
 * @property string $KeyName
 * @property list<AwsEc2LaunchTemplateDataLicenseSetDetails> $LicenseSet
 * @property AwsEc2LaunchTemplateDataMaintenanceOptionsDetails $MaintenanceOptions
 * @property AwsEc2LaunchTemplateDataMetadataOptionsDetails $MetadataOptions
 * @property AwsEc2LaunchTemplateDataMonitoringDetails $Monitoring
 * @property list<AwsEc2LaunchTemplateDataNetworkInterfaceSetDetails> $NetworkInterfaceSet
 * @property AwsEc2LaunchTemplateDataPlacementDetails $Placement
 * @property AwsEc2LaunchTemplateDataPrivateDnsNameOptionsDetails $PrivateDnsNameOptions
 * @property string $RamDiskId
 * @property list<string> $SecurityGroupIdSet
 * @property list<string> $SecurityGroupSet
 * @property string $UserData
 */
class AwsEc2LaunchTemplateDataDetails extends Shape
{
    /**
     * @param array{
     *     BlockDeviceMappingSet?: list<AwsEc2LaunchTemplateDataBlockDeviceMappingSetDetails>,
     *     CapacityReservationSpecification?: AwsEc2LaunchTemplateDataCapacityReservationSpecificationDetails,
     *     CpuOptions?: AwsEc2LaunchTemplateDataCpuOptionsDetails,
     *     CreditSpecification?: AwsEc2LaunchTemplateDataCreditSpecificationDetails,
     *     DisableApiStop?: bool,
     *     DisableApiTermination?: bool,
     *     EbsOptimized?: bool,
     *     ElasticGpuSpecificationSet?: list<AwsEc2LaunchTemplateDataElasticGpuSpecificationSetDetails>,
     *     ElasticInferenceAcceleratorSet?: list<AwsEc2LaunchTemplateDataElasticInferenceAcceleratorSetDetails>,
     *     EnclaveOptions?: AwsEc2LaunchTemplateDataEnclaveOptionsDetails,
     *     HibernationOptions?: AwsEc2LaunchTemplateDataHibernationOptionsDetails,
     *     IamInstanceProfile?: AwsEc2LaunchTemplateDataIamInstanceProfileDetails,
     *     ImageId?: string,
     *     InstanceInitiatedShutdownBehavior?: string,
     *     InstanceMarketOptions?: AwsEc2LaunchTemplateDataInstanceMarketOptionsDetails,
     *     InstanceRequirements?: AwsEc2LaunchTemplateDataInstanceRequirementsDetails,
     *     InstanceType?: string,
     *     KernelId?: string,
     *     KeyName?: string,
     *     LicenseSet?: list<AwsEc2LaunchTemplateDataLicenseSetDetails>,
     *     MaintenanceOptions?: AwsEc2LaunchTemplateDataMaintenanceOptionsDetails,
     *     MetadataOptions?: AwsEc2LaunchTemplateDataMetadataOptionsDetails,
     *     Monitoring?: AwsEc2LaunchTemplateDataMonitoringDetails,
     *     NetworkInterfaceSet?: list<AwsEc2LaunchTemplateDataNetworkInterfaceSetDetails>,
     *     Placement?: AwsEc2LaunchTemplateDataPlacementDetails,
     *     PrivateDnsNameOptions?: AwsEc2LaunchTemplateDataPrivateDnsNameOptionsDetails,
     *     RamDiskId?: string,
     *     SecurityGroupIdSet?: list<string>,
     *     SecurityGroupSet?: list<string>,
     *     UserData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
