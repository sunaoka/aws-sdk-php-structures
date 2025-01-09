<?php

namespace Sunaoka\Aws\Structures\Iot\CreateKeysAndCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PublicKey
 * @property string $PrivateKey
 */
class KeyPair extends Shape
{
    /**
     * @param array{
     *     PublicKey?: string,
     *     PrivateKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
