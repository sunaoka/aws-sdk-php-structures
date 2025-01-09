<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions $Title
 * @property VisualSubtitleLabelOptions $Subtitle
 * @property GeospatialMapConfiguration $ChartConfiguration
 * @property list<ColumnHierarchy> $ColumnHierarchies
 * @property list<VisualCustomAction> $Actions
 * @property string $VisualContentAltText
 */
class GeospatialMapVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions,
     *     Subtitle?: VisualSubtitleLabelOptions,
     *     ChartConfiguration?: GeospatialMapConfiguration,
     *     ColumnHierarchies?: list<ColumnHierarchy>,
     *     Actions?: list<VisualCustomAction>,
     *     VisualContentAltText?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
