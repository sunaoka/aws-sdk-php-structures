<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property string|null $RoleARN
 * @property Shapes\Notification|null $Notification
 * @property Shapes\JobResource|null $Resources
 * @property Shapes\OnDeviceServiceConfiguration|null $OnDeviceServiceConfiguration
 * @property string|null $AddressId
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null $ShippingOption
 * @property string|null $Description
 * @property 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13'|null $SnowballCapacityPreference
 * @property string|null $ForwardingAddressId
 * @property Shapes\PickupDetails|null $PickupDetails
 */
class UpdateJobRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     RoleARN?: string|null,
     *     Notification?: Shapes\Notification|null,
     *     Resources?: Shapes\JobResource|null,
     *     OnDeviceServiceConfiguration?: Shapes\OnDeviceServiceConfiguration|null,
     *     AddressId?: string|null,
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null,
     *     Description?: string|null,
     *     SnowballCapacityPreference?: 'T50'|'T80'|'T100'|'T42'|'T98'|'T8'|'T14'|'T32'|'NoPreference'|'T240'|'T13'|null,
     *     ForwardingAddressId?: string|null,
     *     PickupDetails?: Shapes\PickupDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
