<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInsightsAnalysisId
 * @property string $NetworkInsightsAnalysisArn
 * @property string $NetworkInsightsPathId
 * @property list<string> $AdditionalAccounts
 * @property list<string> $FilterInArns
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property 'running'|'succeeded'|'failed' $Status
 * @property string $StatusMessage
 * @property string $WarningMessage
 * @property bool $NetworkPathFound
 * @property list<PathComponent> $ForwardPathComponents
 * @property list<PathComponent> $ReturnPathComponents
 * @property list<Explanation> $Explanations
 * @property list<AlternatePathHint> $AlternatePathHints
 * @property list<string> $SuggestedAccounts
 * @property list<Tag> $Tags
 */
class NetworkInsightsAnalysis extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsAnalysisId?: string,
     *     NetworkInsightsAnalysisArn?: string,
     *     NetworkInsightsPathId?: string,
     *     AdditionalAccounts?: list<string>,
     *     FilterInArns?: list<string>,
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     Status?: 'running'|'succeeded'|'failed',
     *     StatusMessage?: string,
     *     WarningMessage?: string,
     *     NetworkPathFound?: bool,
     *     ForwardPathComponents?: list<PathComponent>,
     *     ReturnPathComponents?: list<PathComponent>,
     *     Explanations?: list<Explanation>,
     *     AlternatePathHints?: list<AlternatePathHint>,
     *     SuggestedAccounts?: list<string>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
