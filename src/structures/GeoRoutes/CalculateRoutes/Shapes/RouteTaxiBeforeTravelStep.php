<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $Duration
 * @property string|null $Instruction
 * @property 'Wait' $Type
 */
class RouteTaxiBeforeTravelStep extends Shape
{
    /**
     * @param array{
     *     Duration: int<0, 4294967295>,
     *     Instruction?: string|null,
     *     Type: 'Wait'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
