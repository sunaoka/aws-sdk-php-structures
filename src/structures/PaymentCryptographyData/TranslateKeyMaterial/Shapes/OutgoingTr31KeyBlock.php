<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslateKeyMaterial\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WrappingKeyIdentifier
 */
class OutgoingTr31KeyBlock extends Shape
{
    /**
     * @param array{WrappingKeyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
