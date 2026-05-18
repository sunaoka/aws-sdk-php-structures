<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InlineCustomInstruction|null $InlineCustomInstruction
 */
class CustomInstruction extends Shape
{
    /**
     * @param array{InlineCustomInstruction?: InlineCustomInstruction|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
