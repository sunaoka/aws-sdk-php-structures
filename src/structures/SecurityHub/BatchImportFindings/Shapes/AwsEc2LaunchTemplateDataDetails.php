<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsEc2LaunchTemplateDataBlockDeviceMappingSetDetails>|null $BlockDeviceMappingSet
 * @property AwsEc2LaunchTemplateDataCapacityReservationSpecificationDetails|null $CapacityReservationSpecification
 * @property AwsEc2LaunchTemplateDataCpuOptionsDetails|null $CpuOptions
 * @property AwsEc2LaunchTemplateDataCreditSpecificationDetails|null $CreditSpecification
 * @property bool|null $DisableApiStop
 * @property bool|null $DisableApiTermination
 * @property bool|null $EbsOptimized
 * @property list<AwsEc2LaunchTemplateDataElasticGpuSpecificationSetDetails>|null $ElasticGpuSpecificationSet
 * @property list<AwsEc2LaunchTemplateDataElasticInferenceAcceleratorSetDetails>|null $ElasticInferenceAcceleratorSet
 * @property AwsEc2LaunchTemplateDataEnclaveOptionsDetails|null $EnclaveOptions
 * @property AwsEc2LaunchTemplateDataHibernationOptionsDetails|null $HibernationOptions
 * @property AwsEc2LaunchTemplateDataIamInstanceProfileDetails|null $IamInstanceProfile
 * @property string|null $ImageId
 * @property string|null $InstanceInitiatedShutdownBehavior
 * @property AwsEc2LaunchTemplateDataInstanceMarketOptionsDetails|null $InstanceMarketOptions
 * @property AwsEc2LaunchTemplateDataInstanceRequirementsDetails|null $InstanceRequirements
 * @property string|null $InstanceType
 * @property string|null $KernelId
 * @property string|null $KeyName
 * @property list<AwsEc2LaunchTemplateDataLicenseSetDetails>|null $LicenseSet
 * @property AwsEc2LaunchTemplateDataMaintenanceOptionsDetails|null $MaintenanceOptions
 * @property AwsEc2LaunchTemplateDataMetadataOptionsDetails|null $MetadataOptions
 * @property AwsEc2LaunchTemplateDataMonitoringDetails|null $Monitoring
 * @property list<AwsEc2LaunchTemplateDataNetworkInterfaceSetDetails>|null $NetworkInterfaceSet
 * @property AwsEc2LaunchTemplateDataPlacementDetails|null $Placement
 * @property AwsEc2LaunchTemplateDataPrivateDnsNameOptionsDetails|null $PrivateDnsNameOptions
 * @property string|null $RamDiskId
 * @property list<string>|null $SecurityGroupIdSet
 * @property list<string>|null $SecurityGroupSet
 * @property string|null $UserData
 */
class AwsEc2LaunchTemplateDataDetails extends Shape
{
    /**
     * @param array{
     *     BlockDeviceMappingSet?: list<AwsEc2LaunchTemplateDataBlockDeviceMappingSetDetails>|null,
     *     CapacityReservationSpecification?: AwsEc2LaunchTemplateDataCapacityReservationSpecificationDetails|null,
     *     CpuOptions?: AwsEc2LaunchTemplateDataCpuOptionsDetails|null,
     *     CreditSpecification?: AwsEc2LaunchTemplateDataCreditSpecificationDetails|null,
     *     DisableApiStop?: bool|null,
     *     DisableApiTermination?: bool|null,
     *     EbsOptimized?: bool|null,
     *     ElasticGpuSpecificationSet?: list<AwsEc2LaunchTemplateDataElasticGpuSpecificationSetDetails>|null,
     *     ElasticInferenceAcceleratorSet?: list<AwsEc2LaunchTemplateDataElasticInferenceAcceleratorSetDetails>|null,
     *     EnclaveOptions?: AwsEc2LaunchTemplateDataEnclaveOptionsDetails|null,
     *     HibernationOptions?: AwsEc2LaunchTemplateDataHibernationOptionsDetails|null,
     *     IamInstanceProfile?: AwsEc2LaunchTemplateDataIamInstanceProfileDetails|null,
     *     ImageId?: string|null,
     *     InstanceInitiatedShutdownBehavior?: string|null,
     *     InstanceMarketOptions?: AwsEc2LaunchTemplateDataInstanceMarketOptionsDetails|null,
     *     InstanceRequirements?: AwsEc2LaunchTemplateDataInstanceRequirementsDetails|null,
     *     InstanceType?: string|null,
     *     KernelId?: string|null,
     *     KeyName?: string|null,
     *     LicenseSet?: list<AwsEc2LaunchTemplateDataLicenseSetDetails>|null,
     *     MaintenanceOptions?: AwsEc2LaunchTemplateDataMaintenanceOptionsDetails|null,
     *     MetadataOptions?: AwsEc2LaunchTemplateDataMetadataOptionsDetails|null,
     *     Monitoring?: AwsEc2LaunchTemplateDataMonitoringDetails|null,
     *     NetworkInterfaceSet?: list<AwsEc2LaunchTemplateDataNetworkInterfaceSetDetails>|null,
     *     Placement?: AwsEc2LaunchTemplateDataPlacementDetails|null,
     *     PrivateDnsNameOptions?: AwsEc2LaunchTemplateDataPrivateDnsNameOptionsDetails|null,
     *     RamDiskId?: string|null,
     *     SecurityGroupIdSet?: list<string>|null,
     *     SecurityGroupSet?: list<string>|null,
     *     UserData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
