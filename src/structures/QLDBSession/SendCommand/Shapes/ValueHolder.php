<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $IonBinary
 * @property string|null $IonText
 */
class ValueHolder extends Shape
{
    /**
     * @param array{
     *     IonBinary?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     IonText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
