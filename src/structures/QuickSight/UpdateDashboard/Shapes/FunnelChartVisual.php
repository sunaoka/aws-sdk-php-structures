<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property FunnelChartConfiguration|null $ChartConfiguration
 * @property list<VisualCustomAction>|null $Actions
 * @property list<ColumnHierarchy>|null $ColumnHierarchies
 * @property string|null $VisualContentAltText
 */
class FunnelChartVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: FunnelChartConfiguration|null,
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
