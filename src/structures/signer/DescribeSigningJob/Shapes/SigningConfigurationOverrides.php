<?php

namespace Sunaoka\Aws\Structures\signer\DescribeSigningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RSA'|'ECDSA' $encryptionAlgorithm
 * @property 'SHA1'|'SHA256' $hashAlgorithm
 */
class SigningConfigurationOverrides extends Shape
{
    /**
     * @param array{
     *     encryptionAlgorithm?: 'RSA'|'ECDSA',
     *     hashAlgorithm?: 'SHA1'|'SHA256'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
