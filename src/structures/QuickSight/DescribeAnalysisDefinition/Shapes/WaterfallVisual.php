<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property WaterfallChartConfiguration|null $ChartConfiguration
 * @property list<VisualCustomAction>|null $Actions
 * @property list<ColumnHierarchy>|null $ColumnHierarchies
 * @property string|null $VisualContentAltText
 */
class WaterfallVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: WaterfallChartConfiguration|null,
     *     Actions?: list<VisualCustomAction>|null,
     *     ColumnHierarchies?: list<ColumnHierarchy>|null,
     *     VisualContentAltText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
