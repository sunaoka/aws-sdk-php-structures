<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslateKeyMaterial\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IncomingDiffieHellmanTr31KeyBlock|null $DiffieHellmanTr31KeyBlock
 */
class IncomingKeyMaterial extends Shape
{
    /**
     * @param array{DiffieHellmanTr31KeyBlock?: IncomingDiffieHellmanTr31KeyBlock|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
