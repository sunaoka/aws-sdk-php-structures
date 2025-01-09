<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SlotDefaultValue> $defaultValueList
 */
class SlotDefaultValueSpecification extends Shape
{
    /**
     * @param array{defaultValueList: list<SlotDefaultValue>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
