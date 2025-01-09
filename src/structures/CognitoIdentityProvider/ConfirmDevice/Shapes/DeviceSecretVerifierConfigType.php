<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PasswordVerifier
 * @property string $Salt
 */
class DeviceSecretVerifierConfigType extends Shape
{
    /**
     * @param array{
     *     PasswordVerifier?: string,
     *     Salt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
