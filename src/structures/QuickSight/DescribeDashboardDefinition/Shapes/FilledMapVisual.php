<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property FilledMapConfiguration|null $ChartConfiguration
 * @property FilledMapConditionalFormatting|null $ConditionalFormatting
 * @property list<ColumnHierarchy>|null $ColumnHierarchies
 * @property list<VisualCustomAction>|null $Actions
 * @property string|null $VisualContentAltText
 */
class FilledMapVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: FilledMapConfiguration|null,
     *     ConditionalFormatting?: FilledMapConditionalFormatting|null,
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
