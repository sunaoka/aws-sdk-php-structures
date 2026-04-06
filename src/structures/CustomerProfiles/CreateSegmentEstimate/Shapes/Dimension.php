<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProfileAttributes|null $ProfileAttributes
 * @property array<string, CalculatedAttributeDimension>|null $CalculatedAttributes
 */
class Dimension extends Shape
{
    /**
     * @param array{
     *     ProfileAttributes?: ProfileAttributes|null,
     *     CalculatedAttributes?: array<string, CalculatedAttributeDimension>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
