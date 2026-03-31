<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedCarbonEmissionsDimensionValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE' $Dimension
 * @property string $Value
 */
class DimensionEntry extends Shape
{
    /**
     * @param array{
     *     Dimension: 'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
