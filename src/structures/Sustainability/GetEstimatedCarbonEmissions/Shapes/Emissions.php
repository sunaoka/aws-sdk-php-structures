<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedCarbonEmissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Value
 * @property 'MTCO2e' $Unit
 */
class Emissions extends Shape
{
    /**
     * @param array{
     *     Value: double,
     *     Unit: 'MTCO2e'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
