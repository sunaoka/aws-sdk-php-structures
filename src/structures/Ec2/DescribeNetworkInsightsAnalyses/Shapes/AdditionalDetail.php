<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdditionalDetailType
 * @property AnalysisComponent|null $Component
 * @property AnalysisComponent|null $VpcEndpointService
 * @property list<RuleOption>|null $RuleOptions
 * @property list<RuleGroupTypePair>|null $RuleGroupTypePairs
 * @property list<RuleGroupRuleOptionsPair>|null $RuleGroupRuleOptionsPairs
 * @property string|null $ServiceName
 * @property list<AnalysisComponent>|null $LoadBalancers
 */
class AdditionalDetail extends Shape
{
    /**
     * @param array{
     *     AdditionalDetailType?: string|null,
     *     Component?: AnalysisComponent|null,
     *     VpcEndpointService?: AnalysisComponent|null,
     *     RuleOptions?: list<RuleOption>|null,
     *     RuleGroupTypePairs?: list<RuleGroupTypePair>|null,
     *     RuleGroupRuleOptionsPairs?: list<RuleGroupRuleOptionsPair>|null,
     *     ServiceName?: string|null,
     *     LoadBalancers?: list<AnalysisComponent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
