<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RangeOverride|null $Range
 */
class ConditionOverrides extends Shape
{
    /**
     * @param array{Range?: RangeOverride|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
