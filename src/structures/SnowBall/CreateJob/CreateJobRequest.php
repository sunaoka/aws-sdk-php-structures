<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE' $JobType
 * @property Shapes\JobResource $Resources
 * @property Shapes\OnDeviceServiceConfiguration $OnDeviceServiceConfiguration
 * @property string $Description
 * @property string $AddressId
 * @property string $KmsKeyARN
 * @property string $RoleARN
 * @property 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13' $SnowballCapacityPreference
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD' $ShippingOption
 * @property Shapes\Notification $Notification
 * @property string $ClusterId
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C' $SnowballType
 * @property string $ForwardingAddressId
 * @property Shapes\TaxDocuments $TaxDocuments
 * @property Shapes\DeviceConfiguration $DeviceConfiguration
 * @property 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED' $RemoteManagement
 * @property string $LongTermPricingId
 * @property 'IL2'|'IL4'|'IL5'|'IL6'|'IL99' $ImpactLevel
 * @property Shapes\PickupDetails $PickupDetails
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     JobType?: 'IMPORT'|'EXPORT'|'LOCAL_USE',
     *     Resources?: Shapes\JobResource,
     *     OnDeviceServiceConfiguration?: Shapes\OnDeviceServiceConfiguration,
     *     Description?: string,
     *     AddressId?: string,
     *     KmsKeyARN?: string,
     *     RoleARN?: string,
     *     SnowballCapacityPreference?: 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13',
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD',
     *     Notification?: Shapes\Notification,
     *     ClusterId?: string,
     *     SnowballType?: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C',
     *     ForwardingAddressId?: string,
     *     TaxDocuments?: Shapes\TaxDocuments,
     *     DeviceConfiguration?: Shapes\DeviceConfiguration,
     *     RemoteManagement?: 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED',
     *     LongTermPricingId?: string,
     *     ImpactLevel?: 'IL2'|'IL4'|'IL5'|'IL6'|'IL99',
     *     PickupDetails?: Shapes\PickupDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
