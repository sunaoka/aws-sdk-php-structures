<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 366> $Value
 * @property 'DAYS' $Unit
 */
class Range extends Shape
{
    /**
     * @param array{
     *     Value: int<1, 366>,
     *     Unit: 'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
