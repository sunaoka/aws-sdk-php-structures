<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property HeatMapConfiguration|null $ChartConfiguration
 * @property list<ColumnHierarchy>|null $ColumnHierarchies
 * @property list<VisualCustomAction>|null $Actions
 * @property string|null $VisualContentAltText
 */
class HeatMapVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: HeatMapConfiguration|null,
     *     ColumnHierarchies?: list<ColumnHierarchy>|null,
     *     Actions?: list<VisualCustomAction>|null,
     *     VisualContentAltText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
