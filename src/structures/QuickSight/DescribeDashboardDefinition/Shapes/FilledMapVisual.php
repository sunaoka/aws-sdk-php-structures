<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions $Title
 * @property VisualSubtitleLabelOptions $Subtitle
 * @property FilledMapConfiguration $ChartConfiguration
 * @property FilledMapConditionalFormatting $ConditionalFormatting
 * @property list<ColumnHierarchy> $ColumnHierarchies
 * @property list<VisualCustomAction> $Actions
 * @property string $VisualContentAltText
 */
class FilledMapVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions,
     *     Subtitle?: VisualSubtitleLabelOptions,
     *     ChartConfiguration?: FilledMapConfiguration,
     *     ConditionalFormatting?: FilledMapConditionalFormatting,
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
