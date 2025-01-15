<?php

namespace Sunaoka\Aws\Structures\Iot\CreateKeysAndCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PublicKey
 * @property string|null $PrivateKey
 */
class KeyPair extends Shape
{
    /**
     * @param array{
     *     PublicKey?: string|null,
     *     PrivateKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
