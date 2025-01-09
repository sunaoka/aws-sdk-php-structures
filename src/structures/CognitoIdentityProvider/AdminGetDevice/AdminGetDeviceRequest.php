<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminGetDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceKey
 * @property string $UserPoolId
 * @property string $Username
 */
class AdminGetDeviceRequest extends Request
{
    /**
     * @param array{
     *     DeviceKey: string,
     *     UserPoolId: string,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
