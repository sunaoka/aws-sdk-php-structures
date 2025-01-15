<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StatelessRuleGroupReference>|null $StatelessRuleGroupReferences
 * @property list<string> $StatelessDefaultActions
 * @property list<string> $StatelessFragmentDefaultActions
 * @property list<CustomAction>|null $StatelessCustomActions
 * @property list<StatefulRuleGroupReference>|null $StatefulRuleGroupReferences
 * @property list<string>|null $StatefulDefaultActions
 * @property StatefulEngineOptions|null $StatefulEngineOptions
 * @property string|null $TLSInspectionConfigurationArn
 * @property PolicyVariables|null $PolicyVariables
 */
class FirewallPolicy extends Shape
{
    /**
     * @param array{
     *     StatelessRuleGroupReferences?: list<StatelessRuleGroupReference>|null,
     *     StatelessDefaultActions: list<string>,
     *     StatelessFragmentDefaultActions: list<string>,
     *     StatelessCustomActions?: list<CustomAction>|null,
     *     StatefulRuleGroupReferences?: list<StatefulRuleGroupReference>|null,
     *     StatefulDefaultActions?: list<string>|null,
     *     StatefulEngineOptions?: StatefulEngineOptions|null,
     *     TLSInspectionConfigurationArn?: string|null,
     *     PolicyVariables?: PolicyVariables|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
