<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string|null $Name
 * @property DimensionField|null $Time
 * @property DimensionField|null $Category
 * @property MeasureField|null $Value
 * @property int<1, 20>|null $MoverSize
 * @property 'PERCENT_DIFFERENCE'|'ABSOLUTE_DIFFERENCE'|null $SortOrder
 * @property 'TOP'|'BOTTOM' $Type
 */
class TopBottomMoversComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string|null,
     *     Time?: DimensionField|null,
     *     Category?: DimensionField|null,
     *     Value?: MeasureField|null,
     *     MoverSize?: int<1, 20>|null,
     *     SortOrder?: 'PERCENT_DIFFERENCE'|'ABSOLUTE_DIFFERENCE'|null,
     *     Type: 'TOP'|'BOTTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
