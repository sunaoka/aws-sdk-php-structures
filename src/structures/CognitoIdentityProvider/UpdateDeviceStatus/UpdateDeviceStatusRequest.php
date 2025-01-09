<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateDeviceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $DeviceKey
 * @property 'remembered'|'not_remembered' $DeviceRememberedStatus
 */
class UpdateDeviceStatusRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     DeviceKey: string,
     *     DeviceRememberedStatus?: 'remembered'|'not_remembered'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
