<?php

namespace Sunaoka\Aws\Structures\QLDB\GetDigest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IonText
 */
class ValueHolder extends Shape
{
    /**
     * @param array{IonText?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
