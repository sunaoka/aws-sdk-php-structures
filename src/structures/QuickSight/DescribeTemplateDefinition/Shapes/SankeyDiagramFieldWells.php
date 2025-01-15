<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SankeyDiagramAggregatedFieldWells|null $SankeyDiagramAggregatedFieldWells
 */
class SankeyDiagramFieldWells extends Shape
{
    /**
     * @param array{SankeyDiagramAggregatedFieldWells?: SankeyDiagramAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
