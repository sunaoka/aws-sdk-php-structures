<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property string $RoleARN
 * @property Shapes\Notification $Notification
 * @property Shapes\JobResource $Resources
 * @property Shapes\OnDeviceServiceConfiguration $OnDeviceServiceConfiguration
 * @property string $AddressId
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD' $ShippingOption
 * @property string $Description
 * @property 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13' $SnowballCapacityPreference
 * @property string $ForwardingAddressId
 * @property Shapes\PickupDetails $PickupDetails
 */
class UpdateJobRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     RoleARN?: string,
     *     Notification?: Shapes\Notification,
     *     Resources?: Shapes\JobResource,
     *     OnDeviceServiceConfiguration?: Shapes\OnDeviceServiceConfiguration,
     *     AddressId?: string,
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD',
     *     Description?: string,
     *     SnowballCapacityPreference?: 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13',
     *     ForwardingAddressId?: string,
     *     PickupDetails?: Shapes\PickupDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
