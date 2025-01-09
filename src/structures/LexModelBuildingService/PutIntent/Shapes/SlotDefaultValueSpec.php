<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SlotDefaultValue> $defaultValueList
 */
class SlotDefaultValueSpec extends Shape
{
    /**
     * @param array{defaultValueList: list<SlotDefaultValue>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
