<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\DecryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Tr31KeyBlock
 */
class WrappedKeyMaterial extends Shape
{
    /**
     * @param array{Tr31KeyBlock?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
