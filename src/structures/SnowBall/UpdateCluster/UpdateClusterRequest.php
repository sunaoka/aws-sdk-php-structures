<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string|null $RoleARN
 * @property string|null $Description
 * @property Shapes\JobResource|null $Resources
 * @property Shapes\OnDeviceServiceConfiguration|null $OnDeviceServiceConfiguration
 * @property string|null $AddressId
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null $ShippingOption
 * @property Shapes\Notification|null $Notification
 * @property string|null $ForwardingAddressId
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     RoleARN?: string|null,
     *     Description?: string|null,
     *     Resources?: Shapes\JobResource|null,
     *     OnDeviceServiceConfiguration?: Shapes\OnDeviceServiceConfiguration|null,
     *     AddressId?: string|null,
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null,
     *     Notification?: Shapes\Notification|null,
     *     ForwardingAddressId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
