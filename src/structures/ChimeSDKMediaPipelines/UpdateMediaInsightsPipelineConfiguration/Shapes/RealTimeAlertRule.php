<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KeywordMatch'|'Sentiment'|'IssueDetection' $Type
 * @property KeywordMatchConfiguration|null $KeywordMatchConfiguration
 * @property SentimentConfiguration|null $SentimentConfiguration
 * @property IssueDetectionConfiguration|null $IssueDetectionConfiguration
 */
class RealTimeAlertRule extends Shape
{
    /**
     * @param array{
     *     Type: 'KeywordMatch'|'Sentiment'|'IssueDetection',
     *     KeywordMatchConfiguration?: KeywordMatchConfiguration|null,
     *     SentimentConfiguration?: SentimentConfiguration|null,
     *     IssueDetectionConfiguration?: IssueDetectionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
