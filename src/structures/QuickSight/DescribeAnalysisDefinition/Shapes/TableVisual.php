<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property TableConfiguration|null $ChartConfiguration
 * @property TableConditionalFormatting|null $ConditionalFormatting
 * @property list<VisualCustomAction>|null $Actions
 * @property string|null $VisualContentAltText
 */
class TableVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: TableConfiguration|null,
     *     ConditionalFormatting?: TableConditionalFormatting|null,
     *     Actions?: list<VisualCustomAction>|null,
     *     VisualContentAltText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
