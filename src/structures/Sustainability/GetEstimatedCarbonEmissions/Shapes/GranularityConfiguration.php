<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedCarbonEmissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 12>|null $FiscalYearStartMonth
 */
class GranularityConfiguration extends Shape
{
    /**
     * @param array{FiscalYearStartMonth?: int<1, 12>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
