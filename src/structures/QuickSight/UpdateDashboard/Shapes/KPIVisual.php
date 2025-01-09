<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions $Title
 * @property VisualSubtitleLabelOptions $Subtitle
 * @property KPIConfiguration $ChartConfiguration
 * @property KPIConditionalFormatting $ConditionalFormatting
 * @property list<VisualCustomAction> $Actions
 * @property list<ColumnHierarchy> $ColumnHierarchies
 * @property string $VisualContentAltText
 */
class KPIVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions,
     *     Subtitle?: VisualSubtitleLabelOptions,
     *     ChartConfiguration?: KPIConfiguration,
     *     ConditionalFormatting?: KPIConditionalFormatting,
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
