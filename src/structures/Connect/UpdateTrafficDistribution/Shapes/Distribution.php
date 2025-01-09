<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTrafficDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property int $Percentage
 */
class Distribution extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     Percentage: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
