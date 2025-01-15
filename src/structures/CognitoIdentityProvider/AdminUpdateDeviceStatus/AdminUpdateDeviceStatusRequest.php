<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminUpdateDeviceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property string $DeviceKey
 * @property 'remembered'|'not_remembered'|null $DeviceRememberedStatus
 */
class AdminUpdateDeviceStatusRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     DeviceKey: string,
     *     DeviceRememberedStatus?: 'remembered'|'not_remembered'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
