<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 * @property 'DAYS' $Unit
 */
class Range extends Shape
{
    /**
     * @param array{
     *     Value: int,
     *     Unit: 'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
