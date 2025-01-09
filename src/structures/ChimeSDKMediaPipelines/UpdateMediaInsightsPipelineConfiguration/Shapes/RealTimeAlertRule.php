<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KeywordMatch'|'Sentiment'|'IssueDetection' $Type
 * @property KeywordMatchConfiguration $KeywordMatchConfiguration
 * @property SentimentConfiguration $SentimentConfiguration
 * @property IssueDetectionConfiguration $IssueDetectionConfiguration
 */
class RealTimeAlertRule extends Shape
{
    /**
     * @param array{
     *     Type: 'KeywordMatch'|'Sentiment'|'IssueDetection',
     *     KeywordMatchConfiguration?: KeywordMatchConfiguration,
     *     SentimentConfiguration?: SentimentConfiguration,
     *     IssueDetectionConfiguration?: IssueDetectionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
