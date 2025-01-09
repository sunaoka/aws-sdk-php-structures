<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Value $value
 * @property 'Scalar'|'List'|'Composite' $shape
 * @property list<Slot> $values
 * @property array<string, Slot> $subSlots
 */
class Slot extends Shape
{
    /**
     * @param array{
     *     value?: Value,
     *     shape?: 'Scalar'|'List'|'Composite',
     *     values?: list<Slot>,
     *     subSlots?: array<string, Slot>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
