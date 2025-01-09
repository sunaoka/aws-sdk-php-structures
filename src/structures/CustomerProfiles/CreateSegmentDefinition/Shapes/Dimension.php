<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProfileAttributes $ProfileAttributes
 * @property array<string, CalculatedAttributeDimension> $CalculatedAttributes
 */
class Dimension extends Shape
{
    /**
     * @param array{
     *     ProfileAttributes?: ProfileAttributes,
     *     CalculatedAttributes?: array<string, CalculatedAttributeDimension>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
