<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\ReEncryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Tr31KeyBlock
 * @property EcdhDerivationAttributes|null $DiffieHellmanSymmetricKey
 */
class WrappedKeyMaterial extends Shape
{
    /**
     * @param array{
     *     Tr31KeyBlock?: string|null,
     *     DiffieHellmanSymmetricKey?: EcdhDerivationAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
