<?php

namespace Sunaoka\Aws\Structures\Connect\GetTrafficDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property int<0, 100> $Percentage
 */
class Distribution extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     Percentage: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
