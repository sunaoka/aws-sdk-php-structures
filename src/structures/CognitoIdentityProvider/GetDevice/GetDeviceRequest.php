<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceKey
 * @property string|null $AccessToken
 */
class GetDeviceRequest extends Request
{
    /**
     * @param array{
     *     DeviceKey: string,
     *     AccessToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
