<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $startTimeoutMs
 */
class TextInputSpecification extends Shape
{
    /**
     * @param array{startTimeoutMs: int<1, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
