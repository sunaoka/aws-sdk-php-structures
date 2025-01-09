<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StatelessRuleGroupReference> $StatelessRuleGroupReferences
 * @property list<string> $StatelessDefaultActions
 * @property list<string> $StatelessFragmentDefaultActions
 * @property list<CustomAction> $StatelessCustomActions
 * @property list<StatefulRuleGroupReference> $StatefulRuleGroupReferences
 * @property list<string> $StatefulDefaultActions
 * @property StatefulEngineOptions $StatefulEngineOptions
 * @property string $TLSInspectionConfigurationArn
 * @property PolicyVariables $PolicyVariables
 */
class FirewallPolicy extends Shape
{
    /**
     * @param array{
     *     StatelessRuleGroupReferences?: list<StatelessRuleGroupReference>,
     *     StatelessDefaultActions: list<string>,
     *     StatelessFragmentDefaultActions: list<string>,
     *     StatelessCustomActions?: list<CustomAction>,
     *     StatefulRuleGroupReferences?: list<StatefulRuleGroupReference>,
     *     StatefulDefaultActions?: list<string>,
     *     StatefulEngineOptions?: StatefulEngineOptions,
     *     TLSInspectionConfigurationArn?: string,
     *     PolicyVariables?: PolicyVariables
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
