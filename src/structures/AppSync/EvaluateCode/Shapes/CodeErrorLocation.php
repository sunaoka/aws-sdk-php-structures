<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $line
 * @property int|null $column
 * @property int|null $span
 */
class CodeErrorLocation extends Shape
{
    /**
     * @param array{
     *     line?: int|null,
     *     column?: int|null,
     *     span?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
