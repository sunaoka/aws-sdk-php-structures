<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningPlatform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'RSA'|'ECDSA'> $allowedValues
 * @property 'RSA'|'ECDSA' $defaultValue
 */
class EncryptionAlgorithmOptions extends Shape
{
    /**
     * @param array{
     *     allowedValues: list<'RSA'|'ECDSA'>,
     *     defaultValue: 'RSA'|'ECDSA'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
