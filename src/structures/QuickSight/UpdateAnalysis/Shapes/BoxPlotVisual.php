<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions $Title
 * @property VisualSubtitleLabelOptions $Subtitle
 * @property BoxPlotChartConfiguration $ChartConfiguration
 * @property list<VisualCustomAction> $Actions
 * @property list<ColumnHierarchy> $ColumnHierarchies
 * @property string $VisualContentAltText
 */
class BoxPlotVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions,
     *     Subtitle?: VisualSubtitleLabelOptions,
     *     ChartConfiguration?: BoxPlotChartConfiguration,
     *     Actions?: list<VisualCustomAction>,
     *     ColumnHierarchies?: list<ColumnHierarchy>,
     *     VisualContentAltText?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
