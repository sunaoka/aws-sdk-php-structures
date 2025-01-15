<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $MinProficiencyLevel
 * @property float|null $MaxProficiencyLevel
 */
class Range extends Shape
{
    /**
     * @param array{
     *     MinProficiencyLevel?: float|null,
     *     MaxProficiencyLevel?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
