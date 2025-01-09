<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StatelessRuleGroup> $StatelessRuleGroups
 * @property list<string> $StatelessDefaultActions
 * @property list<string> $StatelessFragmentDefaultActions
 * @property list<string> $StatelessCustomActions
 * @property list<StatefulRuleGroup> $StatefulRuleGroups
 * @property list<string> $StatefulDefaultActions
 * @property StatefulEngineOptions $StatefulEngineOptions
 */
class NetworkFirewallPolicyDescription extends Shape
{
    /**
     * @param array{
     *     StatelessRuleGroups?: list<StatelessRuleGroup>,
     *     StatelessDefaultActions?: list<string>,
     *     StatelessFragmentDefaultActions?: list<string>,
     *     StatelessCustomActions?: list<string>,
     *     StatefulRuleGroups?: list<StatefulRuleGroup>,
     *     StatefulDefaultActions?: list<string>,
     *     StatefulEngineOptions?: StatefulEngineOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
