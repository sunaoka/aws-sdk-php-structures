<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningPlatform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SHA1'|'SHA256'> $allowedValues
 * @property 'SHA1'|'SHA256' $defaultValue
 */
class HashAlgorithmOptions extends Shape
{
    /**
     * @param array{
     *     allowedValues: list<'SHA1'|'SHA256'>,
     *     defaultValue: 'SHA1'|'SHA256'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
