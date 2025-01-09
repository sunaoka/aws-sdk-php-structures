<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property string $Color
 */
class ConditionalFormattingSolidColor extends Shape
{
    /**
     * @param array{
     *     Expression: string,
     *     Color?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
