<?php

namespace Sunaoka\Aws\Structures\QLDB\GetDigest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IonText
 */
class ValueHolder extends Shape
{
    /**
     * @param array{IonText?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
