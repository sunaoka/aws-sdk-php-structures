<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Duration
 * @property string $Instruction
 * @property 'Deboard' $Type
 */
class RouteFerryAfterTravelStep extends Shape
{
    /**
     * @param array{
     *     Duration: int,
     *     Instruction?: string,
     *     Type: 'Deboard'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
