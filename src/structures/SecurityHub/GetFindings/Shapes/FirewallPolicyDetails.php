<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FirewallPolicyStatefulRuleGroupReferencesDetails> $StatefulRuleGroupReferences
 * @property list<FirewallPolicyStatelessCustomActionsDetails> $StatelessCustomActions
 * @property list<string> $StatelessDefaultActions
 * @property list<string> $StatelessFragmentDefaultActions
 * @property list<FirewallPolicyStatelessRuleGroupReferencesDetails> $StatelessRuleGroupReferences
 */
class FirewallPolicyDetails extends Shape
{
    /**
     * @param array{
     *     StatefulRuleGroupReferences?: list<FirewallPolicyStatefulRuleGroupReferencesDetails>,
     *     StatelessCustomActions?: list<FirewallPolicyStatelessCustomActionsDetails>,
     *     StatelessDefaultActions?: list<string>,
     *     StatelessFragmentDefaultActions?: list<string>,
     *     StatelessRuleGroupReferences?: list<FirewallPolicyStatelessRuleGroupReferencesDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
