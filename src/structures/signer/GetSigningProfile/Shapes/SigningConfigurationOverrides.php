<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RSA'|'ECDSA'|null $encryptionAlgorithm
 * @property 'SHA1'|'SHA256'|null $hashAlgorithm
 */
class SigningConfigurationOverrides extends Shape
{
    /**
     * @param array{
     *     encryptionAlgorithm?: 'RSA'|'ECDSA'|null,
     *     hashAlgorithm?: 'SHA1'|'SHA256'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
