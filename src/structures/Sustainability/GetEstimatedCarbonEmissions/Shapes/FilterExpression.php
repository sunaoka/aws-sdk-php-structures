<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedCarbonEmissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE', list<string>>|null $Dimensions
 */
class FilterExpression extends Shape
{
    /**
     * @param array{Dimensions?: array<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE', list<string>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
