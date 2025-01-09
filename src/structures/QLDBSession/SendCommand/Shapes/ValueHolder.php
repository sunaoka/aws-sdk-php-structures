<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IonBinary
 * @property string $IonText
 */
class ValueHolder extends Shape
{
    /**
     * @param array{
     *     IonBinary?: string,
     *     IonText?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
