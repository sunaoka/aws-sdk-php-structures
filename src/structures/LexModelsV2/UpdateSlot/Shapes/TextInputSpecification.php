<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $startTimeoutMs
 */
class TextInputSpecification extends Shape
{
    /**
     * @param array{startTimeoutMs: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
