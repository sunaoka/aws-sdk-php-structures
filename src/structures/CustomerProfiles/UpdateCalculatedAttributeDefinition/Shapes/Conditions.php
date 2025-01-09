<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Range $Range
 * @property int $ObjectCount
 * @property Threshold $Threshold
 */
class Conditions extends Shape
{
    /**
     * @param array{
     *     Range?: Range,
     *     ObjectCount?: int,
     *     Threshold?: Threshold
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
