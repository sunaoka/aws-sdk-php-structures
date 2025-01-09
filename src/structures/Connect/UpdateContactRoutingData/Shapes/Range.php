<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $MinProficiencyLevel
 * @property float $MaxProficiencyLevel
 */
class Range extends Shape
{
    /**
     * @param array{
     *     MinProficiencyLevel?: float,
     *     MaxProficiencyLevel?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
