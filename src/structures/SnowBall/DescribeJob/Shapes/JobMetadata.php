<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property 'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending' $JobState
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE' $JobType
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C' $SnowballType
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property JobResource $Resources
 * @property string $Description
 * @property string $KmsKeyARN
 * @property string $RoleARN
 * @property string $AddressId
 * @property ShippingDetails $ShippingDetails
 * @property 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13' $SnowballCapacityPreference
 * @property Notification $Notification
 * @property DataTransfer $DataTransferProgress
 * @property JobLogs $JobLogInfo
 * @property string $ClusterId
 * @property string $ForwardingAddressId
 * @property TaxDocuments $TaxDocuments
 * @property DeviceConfiguration $DeviceConfiguration
 * @property 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED' $RemoteManagement
 * @property string $LongTermPricingId
 * @property OnDeviceServiceConfiguration $OnDeviceServiceConfiguration
 * @property 'IL2'|'IL4'|'IL5'|'IL6'|'IL99' $ImpactLevel
 * @property PickupDetails $PickupDetails
 * @property string $SnowballId
 */
class JobMetadata extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     JobState?: 'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending',
     *     JobType?: 'IMPORT'|'EXPORT'|'LOCAL_USE',
     *     SnowballType?: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Resources?: JobResource,
     *     Description?: string,
     *     KmsKeyARN?: string,
     *     RoleARN?: string,
     *     AddressId?: string,
     *     ShippingDetails?: ShippingDetails,
     *     SnowballCapacityPreference?: 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13',
     *     Notification?: Notification,
     *     DataTransferProgress?: DataTransfer,
     *     JobLogInfo?: JobLogs,
     *     ClusterId?: string,
     *     ForwardingAddressId?: string,
     *     TaxDocuments?: TaxDocuments,
     *     DeviceConfiguration?: DeviceConfiguration,
     *     RemoteManagement?: 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED',
     *     LongTermPricingId?: string,
     *     OnDeviceServiceConfiguration?: OnDeviceServiceConfiguration,
     *     ImpactLevel?: 'IL2'|'IL4'|'IL5'|'IL6'|'IL99',
     *     PickupDetails?: PickupDetails,
     *     SnowballId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
