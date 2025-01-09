<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string $Name
 * @property DimensionField $Time
 * @property MeasureField $Value
 * @property 'MAXIMUM'|'MINIMUM' $Type
 */
class MaximumMinimumComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string,
     *     Time?: DimensionField,
     *     Value?: MeasureField,
     *     Type: 'MAXIMUM'|'MINIMUM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
