<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SankeyDiagramAggregatedFieldWells $SankeyDiagramAggregatedFieldWells
 */
class SankeyDiagramFieldWells extends Shape
{
    /**
     * @param array{SankeyDiagramAggregatedFieldWells?: SankeyDiagramAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
