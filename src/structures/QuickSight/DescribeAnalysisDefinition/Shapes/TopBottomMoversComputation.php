<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string $Name
 * @property DimensionField $Time
 * @property DimensionField $Category
 * @property MeasureField $Value
 * @property int $MoverSize
 * @property 'PERCENT_DIFFERENCE'|'ABSOLUTE_DIFFERENCE' $SortOrder
 * @property 'TOP'|'BOTTOM' $Type
 */
class TopBottomMoversComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string,
     *     Time?: DimensionField,
     *     Category?: DimensionField,
     *     Value?: MeasureField,
     *     MoverSize?: int,
     *     SortOrder?: 'PERCENT_DIFFERENCE'|'ABSOLUTE_DIFFERENCE',
     *     Type: 'TOP'|'BOTTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
