<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property 'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending'|null $JobState
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE'|null $JobType
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'|null $SnowballType
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property JobResource|null $Resources
 * @property string|null $Description
 * @property string|null $KmsKeyARN
 * @property string|null $RoleARN
 * @property string|null $AddressId
 * @property ShippingDetails|null $ShippingDetails
 * @property 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13'|null $SnowballCapacityPreference
 * @property Notification|null $Notification
 * @property DataTransfer|null $DataTransferProgress
 * @property JobLogs|null $JobLogInfo
 * @property string|null $ClusterId
 * @property string|null $ForwardingAddressId
 * @property TaxDocuments|null $TaxDocuments
 * @property DeviceConfiguration|null $DeviceConfiguration
 * @property 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED'|null $RemoteManagement
 * @property string|null $LongTermPricingId
 * @property OnDeviceServiceConfiguration|null $OnDeviceServiceConfiguration
 * @property 'IL2'|'IL4'|'IL5'|'IL6'|'IL99'|null $ImpactLevel
 * @property PickupDetails|null $PickupDetails
 * @property string|null $SnowballId
 */
class JobMetadata extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     JobState?: 'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending'|null,
     *     JobType?: 'IMPORT'|'EXPORT'|'LOCAL_USE'|null,
     *     SnowballType?: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Resources?: JobResource|null,
     *     Description?: string|null,
     *     KmsKeyARN?: string|null,
     *     RoleARN?: string|null,
     *     AddressId?: string|null,
     *     ShippingDetails?: ShippingDetails|null,
     *     SnowballCapacityPreference?: 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13'|null,
     *     Notification?: Notification|null,
     *     DataTransferProgress?: DataTransfer|null,
     *     JobLogInfo?: JobLogs|null,
     *     ClusterId?: string|null,
     *     ForwardingAddressId?: string|null,
     *     TaxDocuments?: TaxDocuments|null,
     *     DeviceConfiguration?: DeviceConfiguration|null,
     *     RemoteManagement?: 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED'|null,
     *     LongTermPricingId?: string|null,
     *     OnDeviceServiceConfiguration?: OnDeviceServiceConfiguration|null,
     *     ImpactLevel?: 'IL2'|'IL4'|'IL5'|'IL6'|'IL99'|null,
     *     PickupDetails?: PickupDetails|null,
     *     SnowballId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
