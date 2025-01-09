<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions $Title
 * @property VisualSubtitleLabelOptions $Subtitle
 * @property PivotTableConfiguration $ChartConfiguration
 * @property PivotTableConditionalFormatting $ConditionalFormatting
 * @property list<VisualCustomAction> $Actions
 * @property string $VisualContentAltText
 */
class PivotTableVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions,
     *     Subtitle?: VisualSubtitleLabelOptions,
     *     ChartConfiguration?: PivotTableConfiguration,
     *     ConditionalFormatting?: PivotTableConditionalFormatting,
     *     Actions?: list<VisualCustomAction>,
     *     VisualContentAltText?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
