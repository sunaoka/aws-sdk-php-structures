<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StatelessRuleGroup>|null $StatelessRuleGroups
 * @property list<string>|null $StatelessDefaultActions
 * @property list<string>|null $StatelessFragmentDefaultActions
 * @property list<string>|null $StatelessCustomActions
 * @property list<StatefulRuleGroup>|null $StatefulRuleGroups
 * @property list<string>|null $StatefulDefaultActions
 * @property StatefulEngineOptions|null $StatefulEngineOptions
 */
class NetworkFirewallPolicyDescription extends Shape
{
    /**
     * @param array{
     *     StatelessRuleGroups?: list<StatelessRuleGroup>|null,
     *     StatelessDefaultActions?: list<string>|null,
     *     StatelessFragmentDefaultActions?: list<string>|null,
     *     StatelessCustomActions?: list<string>|null,
     *     StatefulRuleGroups?: list<StatefulRuleGroup>|null,
     *     StatefulDefaultActions?: list<string>|null,
     *     StatefulEngineOptions?: StatefulEngineOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
