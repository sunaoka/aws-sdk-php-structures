<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string|null $Name
 * @property DimensionField|null $Category
 * @property MeasureField|null $Value
 * @property int<1, 20>|null $ResultSize
 * @property 'TOP'|'BOTTOM' $Type
 */
class TopBottomRankedComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string|null,
     *     Category?: DimensionField|null,
     *     Value?: MeasureField|null,
     *     ResultSize?: int<1, 20>|null,
     *     Type: 'TOP'|'BOTTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
