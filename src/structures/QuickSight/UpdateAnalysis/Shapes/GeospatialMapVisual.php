<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property GeospatialMapConfiguration|null $ChartConfiguration
 * @property list<ColumnHierarchy>|null $ColumnHierarchies
 * @property list<VisualCustomAction>|null $Actions
 * @property string|null $VisualContentAltText
 */
class GeospatialMapVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: GeospatialMapConfiguration|null,
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
