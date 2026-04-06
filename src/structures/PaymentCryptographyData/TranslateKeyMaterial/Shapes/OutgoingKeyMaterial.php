<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslateKeyMaterial\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutgoingTr31KeyBlock|null $Tr31KeyBlock
 */
class OutgoingKeyMaterial extends Shape
{
    /**
     * @param array{Tr31KeyBlock?: OutgoingTr31KeyBlock|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
