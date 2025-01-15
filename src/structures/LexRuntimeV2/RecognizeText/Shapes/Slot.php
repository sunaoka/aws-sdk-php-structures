<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Value|null $value
 * @property 'Scalar'|'List'|'Composite'|null $shape
 * @property list<Slot>|null $values
 * @property array<string, Slot>|null $subSlots
 */
class Slot extends Shape
{
    /**
     * @param array{
     *     value?: Value|null,
     *     shape?: 'Scalar'|'List'|'Composite'|null,
     *     values?: list<Slot>|null,
     *     subSlots?: array<string, Slot>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
