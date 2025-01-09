<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expressionString
 */
class Condition extends Shape
{
    /**
     * @param array{expressionString: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
