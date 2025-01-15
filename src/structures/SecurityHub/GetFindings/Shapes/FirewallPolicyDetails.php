<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FirewallPolicyStatefulRuleGroupReferencesDetails>|null $StatefulRuleGroupReferences
 * @property list<FirewallPolicyStatelessCustomActionsDetails>|null $StatelessCustomActions
 * @property list<string>|null $StatelessDefaultActions
 * @property list<string>|null $StatelessFragmentDefaultActions
 * @property list<FirewallPolicyStatelessRuleGroupReferencesDetails>|null $StatelessRuleGroupReferences
 */
class FirewallPolicyDetails extends Shape
{
    /**
     * @param array{
     *     StatefulRuleGroupReferences?: list<FirewallPolicyStatefulRuleGroupReferencesDetails>|null,
     *     StatelessCustomActions?: list<FirewallPolicyStatelessCustomActionsDetails>|null,
     *     StatelessDefaultActions?: list<string>|null,
     *     StatelessFragmentDefaultActions?: list<string>|null,
     *     StatelessRuleGroupReferences?: list<FirewallPolicyStatelessRuleGroupReferencesDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
