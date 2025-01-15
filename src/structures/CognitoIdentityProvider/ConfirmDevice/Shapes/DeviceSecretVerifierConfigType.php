<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PasswordVerifier
 * @property string|null $Salt
 */
class DeviceSecretVerifierConfigType extends Shape
{
    /**
     * @param array{
     *     PasswordVerifier?: string|null,
     *     Salt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
