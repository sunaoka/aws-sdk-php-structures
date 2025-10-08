<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BlockDeviceMappingRequest>|null $BlockDeviceMappings
 * @property CapacityReservationSpecification|null $CapacityReservationSpecification
 * @property CpuOptionsRequest|null $CpuOptions
 * @property CreditSpecificationRequest|null $CreditSpecification
 * @property bool|null $DisableApiStop
 * @property bool|null $EbsOptimized
 * @property bool|null $EnablePrimaryIpv6
 * @property EnclaveOptionsRequest|null $EnclaveOptions
 * @property HibernationOptionsRequest|null $HibernationOptions
 * @property IamInstanceProfileSpecification|null $IamInstanceProfile
 * @property string|null $ImageId
 * @property InstanceMarketOptionsRequest|null $InstanceMarketOptions
 * @property string|null $InstanceType
 * @property list<InstanceIpv6Address>|null $Ipv6Addresses
 * @property int<0, max>|null $Ipv6AddressCount
 * @property string|null $KernelId
 * @property string|null $KeyName
 * @property list<LicenseConfigurationRequest>|null $LicenseSpecifications
 * @property InstanceMaintenanceOptionsRequest|null $MaintenanceOptions
 * @property InstanceMetadataOptionsRequest|null $MetadataOptions
 * @property RunInstancesMonitoringEnabled|null $Monitoring
 * @property list<InstanceNetworkInterfaceSpecification>|null $NetworkInterfaces
 * @property InstanceNetworkPerformanceOptionsRequest|null $NetworkPerformanceOptions
 * @property Placement|null $Placement
 * @property PrivateDnsNameOptionsRequest|null $PrivateDnsNameOptions
 * @property string|null $PrivateIpAddress
 * @property string|null $RamdiskId
 * @property list<string>|null $SecurityGroupIds
 * @property list<string>|null $SecurityGroups
 * @property string|null $SubnetId
 * @property list<TagSpecification>|null $TagSpecifications
 * @property string|null $UserData
 */
class ManagedInstanceRequest extends Shape
{
    /**
     * @param array{
     *     BlockDeviceMappings?: list<BlockDeviceMappingRequest>|null,
     *     CapacityReservationSpecification?: CapacityReservationSpecification|null,
     *     CpuOptions?: CpuOptionsRequest|null,
     *     CreditSpecification?: CreditSpecificationRequest|null,
     *     DisableApiStop?: bool|null,
     *     EbsOptimized?: bool|null,
     *     EnablePrimaryIpv6?: bool|null,
     *     EnclaveOptions?: EnclaveOptionsRequest|null,
     *     HibernationOptions?: HibernationOptionsRequest|null,
     *     IamInstanceProfile?: IamInstanceProfileSpecification|null,
     *     ImageId?: string|null,
     *     InstanceMarketOptions?: InstanceMarketOptionsRequest|null,
     *     InstanceType?: string|null,
     *     Ipv6Addresses?: list<InstanceIpv6Address>|null,
     *     Ipv6AddressCount?: int<0, max>|null,
     *     KernelId?: string|null,
     *     KeyName?: string|null,
     *     LicenseSpecifications?: list<LicenseConfigurationRequest>|null,
     *     MaintenanceOptions?: InstanceMaintenanceOptionsRequest|null,
     *     MetadataOptions?: InstanceMetadataOptionsRequest|null,
     *     Monitoring?: RunInstancesMonitoringEnabled|null,
     *     NetworkInterfaces?: list<InstanceNetworkInterfaceSpecification>|null,
     *     NetworkPerformanceOptions?: InstanceNetworkPerformanceOptionsRequest|null,
     *     Placement?: Placement|null,
     *     PrivateDnsNameOptions?: PrivateDnsNameOptionsRequest|null,
     *     PrivateIpAddress?: string|null,
     *     RamdiskId?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     SecurityGroups?: list<string>|null,
     *     SubnetId?: string|null,
     *     TagSpecifications?: list<TagSpecification>|null,
     *     UserData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
