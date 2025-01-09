<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $DeviceKey
 * @property Shapes\DeviceSecretVerifierConfigType $DeviceSecretVerifierConfig
 * @property string $DeviceName
 */
class ConfirmDeviceRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     DeviceKey: string,
     *     DeviceSecretVerifierConfig?: Shapes\DeviceSecretVerifierConfigType,
     *     DeviceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
