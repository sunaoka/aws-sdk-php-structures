<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SankeyDiagramFieldWells $FieldWells
 * @property SankeyDiagramSortConfiguration $SortConfiguration
 * @property DataLabelOptions $DataLabels
 * @property VisualInteractionOptions $Interactions
 */
class SankeyDiagramChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: SankeyDiagramFieldWells,
     *     SortConfiguration?: SankeyDiagramSortConfiguration,
     *     DataLabels?: DataLabelOptions,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
