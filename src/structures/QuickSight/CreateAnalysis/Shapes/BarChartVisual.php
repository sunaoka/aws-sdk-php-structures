<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions $Title
 * @property VisualSubtitleLabelOptions $Subtitle
 * @property BarChartConfiguration $ChartConfiguration
 * @property list<VisualCustomAction> $Actions
 * @property list<ColumnHierarchy> $ColumnHierarchies
 * @property string $VisualContentAltText
 */
class BarChartVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions,
     *     Subtitle?: VisualSubtitleLabelOptions,
     *     ChartConfiguration?: BarChartConfiguration,
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
