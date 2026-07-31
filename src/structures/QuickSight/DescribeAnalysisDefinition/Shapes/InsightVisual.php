<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property InsightConfiguration|null $InsightConfiguration
 * @property list<VisualCustomAction>|null $Actions
 * @property string|null $DataSetIdentifier
 * @property string|null $TopicIdentifier
 * @property string|null $VisualContentAltText
 */
class InsightVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     InsightConfiguration?: InsightConfiguration|null,
     *     Actions?: list<VisualCustomAction>|null,
     *     DataSetIdentifier?: string|null,
     *     TopicIdentifier?: string|null,
     *     VisualContentAltText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
