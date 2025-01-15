<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property PivotTableConfiguration|null $ChartConfiguration
 * @property PivotTableConditionalFormatting|null $ConditionalFormatting
 * @property list<VisualCustomAction>|null $Actions
 * @property string|null $VisualContentAltText
 */
class PivotTableVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: PivotTableConfiguration|null,
     *     ConditionalFormatting?: PivotTableConditionalFormatting|null,
     *     Actions?: list<VisualCustomAction>|null,
     *     VisualContentAltText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
