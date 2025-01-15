<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ForgetDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccessToken
 * @property string $DeviceKey
 */
class ForgetDeviceRequest extends Request
{
    /**
     * @param array{
     *     AccessToken?: string|null,
     *     DeviceKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
