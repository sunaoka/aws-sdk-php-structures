<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FirewallRuleGroupEntry>|null $FirewallRuleGroupEntries
 * @property list<IpsRuleGroupEntry>|null $IpsRuleGroupEntries
 * @property 'ENFORCE'|'MONITOR'|null $PolicyMode
 * @property 'DROP'|'ACCEPT'|'REJECT'|'ALERT'|null $FirewallDefaultAction
 * @property StatefulEngineOptionsV2|null $StatefulEngineOptions
 * @property string|null $TLSInspectionConfigurationArn
 * @property PolicyVariables|null $PolicyVariables
 * @property Route53ResolvedIPValidation|null $Route53ResolvedIPValidation
 */
class FirewallPolicyV2 extends Shape
{
    /**
     * @param array{
     *     FirewallRuleGroupEntries?: list<FirewallRuleGroupEntry>|null,
     *     IpsRuleGroupEntries?: list<IpsRuleGroupEntry>|null,
     *     PolicyMode?: 'ENFORCE'|'MONITOR'|null,
     *     FirewallDefaultAction?: 'DROP'|'ACCEPT'|'REJECT'|'ALERT'|null,
     *     StatefulEngineOptions?: StatefulEngineOptionsV2|null,
     *     TLSInspectionConfigurationArn?: string|null,
     *     PolicyVariables?: PolicyVariables|null,
     *     Route53ResolvedIPValidation?: Route53ResolvedIPValidation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
