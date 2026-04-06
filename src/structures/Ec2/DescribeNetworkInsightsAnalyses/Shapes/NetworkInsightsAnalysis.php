<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInsightsAnalysisId
 * @property string|null $NetworkInsightsAnalysisArn
 * @property string|null $NetworkInsightsPathId
 * @property list<string>|null $AdditionalAccounts
 * @property list<string>|null $FilterInArns
 * @property list<string>|null $FilterOutArns
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property 'running'|'succeeded'|'failed'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $WarningMessage
 * @property bool|null $NetworkPathFound
 * @property list<PathComponent>|null $ForwardPathComponents
 * @property list<PathComponent>|null $ReturnPathComponents
 * @property list<Explanation>|null $Explanations
 * @property list<AlternatePathHint>|null $AlternatePathHints
 * @property list<string>|null $SuggestedAccounts
 * @property list<Tag>|null $Tags
 */
class NetworkInsightsAnalysis extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsAnalysisId?: string|null,
     *     NetworkInsightsAnalysisArn?: string|null,
     *     NetworkInsightsPathId?: string|null,
     *     AdditionalAccounts?: list<string>|null,
     *     FilterInArns?: list<string>|null,
     *     FilterOutArns?: list<string>|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'running'|'succeeded'|'failed'|null,
     *     StatusMessage?: string|null,
     *     WarningMessage?: string|null,
     *     NetworkPathFound?: bool|null,
     *     ForwardPathComponents?: list<PathComponent>|null,
     *     ReturnPathComponents?: list<PathComponent>|null,
     *     Explanations?: list<Explanation>|null,
     *     AlternatePathHints?: list<AlternatePathHint>|null,
     *     SuggestedAccounts?: list<string>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
