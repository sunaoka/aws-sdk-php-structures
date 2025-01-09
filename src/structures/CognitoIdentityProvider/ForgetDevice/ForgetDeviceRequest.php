<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ForgetDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $DeviceKey
 */
class ForgetDeviceRequest extends Request
{
    /**
     * @param array{
     *     AccessToken?: string,
     *     DeviceKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
