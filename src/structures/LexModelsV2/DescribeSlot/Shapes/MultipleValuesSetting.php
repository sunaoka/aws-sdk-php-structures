<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $allowMultipleValues
 */
class MultipleValuesSetting extends Shape
{
    /**
     * @param array{allowMultipleValues?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
