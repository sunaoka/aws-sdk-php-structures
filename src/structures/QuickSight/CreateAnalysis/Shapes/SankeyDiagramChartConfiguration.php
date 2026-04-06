<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SankeyDiagramFieldWells|null $FieldWells
 * @property SankeyDiagramSortConfiguration|null $SortConfiguration
 * @property DataLabelOptions|null $DataLabels
 * @property VisualInteractionOptions|null $Interactions
 */
class SankeyDiagramChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: SankeyDiagramFieldWells|null,
     *     SortConfiguration?: SankeyDiagramSortConfiguration|null,
     *     DataLabels?: DataLabelOptions|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
