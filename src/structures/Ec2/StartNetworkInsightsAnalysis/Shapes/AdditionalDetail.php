<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdditionalDetailType
 * @property AnalysisComponent $Component
 * @property AnalysisComponent $VpcEndpointService
 * @property list<RuleOption> $RuleOptions
 * @property list<RuleGroupTypePair> $RuleGroupTypePairs
 * @property list<RuleGroupRuleOptionsPair> $RuleGroupRuleOptionsPairs
 * @property string $ServiceName
 * @property list<AnalysisComponent> $LoadBalancers
 */
class AdditionalDetail extends Shape
{
    /**
     * @param array{
     *     AdditionalDetailType?: string,
     *     Component?: AnalysisComponent,
     *     VpcEndpointService?: AnalysisComponent,
     *     RuleOptions?: list<RuleOption>,
     *     RuleGroupTypePairs?: list<RuleGroupTypePair>,
     *     RuleGroupRuleOptionsPairs?: list<RuleGroupRuleOptionsPair>,
     *     ServiceName?: string,
     *     LoadBalancers?: list<AnalysisComponent>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
