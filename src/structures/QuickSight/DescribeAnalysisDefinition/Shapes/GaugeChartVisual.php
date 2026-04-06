<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property GaugeChartConfiguration|null $ChartConfiguration
 * @property GaugeChartConditionalFormatting|null $ConditionalFormatting
 * @property list<VisualCustomAction>|null $Actions
 * @property string|null $VisualContentAltText
 */
class GaugeChartVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: GaugeChartConfiguration|null,
     *     ConditionalFormatting?: GaugeChartConditionalFormatting|null,
     *     Actions?: list<VisualCustomAction>|null,
     *     VisualContentAltText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
