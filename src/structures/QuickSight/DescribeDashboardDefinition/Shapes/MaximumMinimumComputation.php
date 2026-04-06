<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string|null $Name
 * @property DimensionField|null $Time
 * @property MeasureField|null $Value
 * @property 'MAXIMUM'|'MINIMUM' $Type
 */
class MaximumMinimumComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string|null,
     *     Time?: DimensionField|null,
     *     Value?: MeasureField|null,
     *     Type: 'MAXIMUM'|'MINIMUM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
