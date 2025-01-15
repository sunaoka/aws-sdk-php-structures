<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE'|null $JobType
 * @property Shapes\JobResource|null $Resources
 * @property Shapes\OnDeviceServiceConfiguration|null $OnDeviceServiceConfiguration
 * @property string|null $Description
 * @property string|null $AddressId
 * @property string|null $KmsKeyARN
 * @property string|null $RoleARN
 * @property 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13'|null $SnowballCapacityPreference
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null $ShippingOption
 * @property Shapes\Notification|null $Notification
 * @property string|null $ClusterId
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'|null $SnowballType
 * @property string|null $ForwardingAddressId
 * @property Shapes\TaxDocuments|null $TaxDocuments
 * @property Shapes\DeviceConfiguration|null $DeviceConfiguration
 * @property 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED'|null $RemoteManagement
 * @property string|null $LongTermPricingId
 * @property 'IL2'|'IL4'|'IL5'|'IL6'|'IL99'|null $ImpactLevel
 * @property Shapes\PickupDetails|null $PickupDetails
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     JobType?: 'IMPORT'|'EXPORT'|'LOCAL_USE'|null,
     *     Resources?: Shapes\JobResource|null,
     *     OnDeviceServiceConfiguration?: Shapes\OnDeviceServiceConfiguration|null,
     *     Description?: string|null,
     *     AddressId?: string|null,
     *     KmsKeyARN?: string|null,
     *     RoleARN?: string|null,
     *     SnowballCapacityPreference?: 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13'|null,
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null,
     *     Notification?: Shapes\Notification|null,
     *     ClusterId?: string|null,
     *     SnowballType?: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'|null,
     *     ForwardingAddressId?: string|null,
     *     TaxDocuments?: Shapes\TaxDocuments|null,
     *     DeviceConfiguration?: Shapes\DeviceConfiguration|null,
     *     RemoteManagement?: 'INSTALLED_ONLY'|'INSTALLED_AUTOSTART'|'NOT_INSTALLED'|null,
     *     LongTermPricingId?: string|null,
     *     ImpactLevel?: 'IL2'|'IL4'|'IL5'|'IL6'|'IL99'|null,
     *     PickupDetails?: Shapes\PickupDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
