<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Scalar'|'List' $shape
 * @property SlotValue $value
 * @property list<SlotValueOverride> $values
 */
class SlotValueOverride extends Shape
{
    /**
     * @param array{
     *     shape?: 'Scalar'|'List',
     *     value?: SlotValue,
     *     values?: list<SlotValueOverride>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
