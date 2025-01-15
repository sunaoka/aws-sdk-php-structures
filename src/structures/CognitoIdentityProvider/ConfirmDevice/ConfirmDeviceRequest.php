<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $DeviceKey
 * @property Shapes\DeviceSecretVerifierConfigType|null $DeviceSecretVerifierConfig
 * @property string|null $DeviceName
 */
class ConfirmDeviceRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     DeviceKey: string,
     *     DeviceSecretVerifierConfig?: Shapes\DeviceSecretVerifierConfigType|null,
     *     DeviceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
