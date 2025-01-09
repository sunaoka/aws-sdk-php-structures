<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $RoleARN
 * @property string $Description
 * @property Shapes\JobResource $Resources
 * @property Shapes\OnDeviceServiceConfiguration $OnDeviceServiceConfiguration
 * @property string $AddressId
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD' $ShippingOption
 * @property Shapes\Notification $Notification
 * @property string $ForwardingAddressId
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     RoleARN?: string,
     *     Description?: string,
     *     Resources?: Shapes\JobResource,
     *     OnDeviceServiceConfiguration?: Shapes\OnDeviceServiceConfiguration,
     *     AddressId?: string,
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD',
     *     Notification?: Shapes\Notification,
     *     ForwardingAddressId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
