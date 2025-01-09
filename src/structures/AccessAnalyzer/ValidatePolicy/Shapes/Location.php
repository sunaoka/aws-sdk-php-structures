<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ValidatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PathElement> $path
 * @property Span $span
 */
class Location extends Shape
{
    /**
     * @param array{
     *     path: list<PathElement>,
     *     span: Span
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
