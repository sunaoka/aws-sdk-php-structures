<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions $Title
 * @property VisualSubtitleLabelOptions $Subtitle
 * @property GaugeChartConfiguration $ChartConfiguration
 * @property GaugeChartConditionalFormatting $ConditionalFormatting
 * @property list<VisualCustomAction> $Actions
 * @property string $VisualContentAltText
 */
class GaugeChartVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions,
     *     Subtitle?: VisualSubtitleLabelOptions,
     *     ChartConfiguration?: GaugeChartConfiguration,
     *     ConditionalFormatting?: GaugeChartConditionalFormatting,
     *     Actions?: list<VisualCustomAction>,
     *     VisualContentAltText?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
