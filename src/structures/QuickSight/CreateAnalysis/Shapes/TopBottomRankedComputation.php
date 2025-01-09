<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string $Name
 * @property DimensionField $Category
 * @property MeasureField $Value
 * @property int<1, 20> $ResultSize
 * @property 'TOP'|'BOTTOM' $Type
 */
class TopBottomRankedComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string,
     *     Category?: DimensionField,
     *     Value?: MeasureField,
     *     ResultSize?: int<1, 20>,
     *     Type: 'TOP'|'BOTTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
