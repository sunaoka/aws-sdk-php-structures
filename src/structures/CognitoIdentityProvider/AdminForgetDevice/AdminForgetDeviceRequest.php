<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminForgetDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property string $DeviceKey
 */
class AdminForgetDeviceRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     DeviceKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
