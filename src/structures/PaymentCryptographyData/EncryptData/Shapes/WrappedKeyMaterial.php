<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\EncryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Tr31KeyBlock
 * @property EcdhDerivationAttributes $DiffieHellmanSymmetricKey
 */
class WrappedKeyMaterial extends Shape
{
    /**
     * @param array{
     *     Tr31KeyBlock?: string,
     *     DiffieHellmanSymmetricKey?: EcdhDerivationAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
