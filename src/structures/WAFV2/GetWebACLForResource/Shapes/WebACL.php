<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $ARN
 * @property DefaultAction $DefaultAction
 * @property string $Description
 * @property list<Rule> $Rules
 * @property VisibilityConfig $VisibilityConfig
 * @property int $Capacity
 * @property list<FirewallManagerRuleGroup> $PreProcessFirewallManagerRuleGroups
 * @property list<FirewallManagerRuleGroup> $PostProcessFirewallManagerRuleGroups
 * @property bool $ManagedByFirewallManager
 * @property string $LabelNamespace
 * @property array<string, CustomResponseBody> $CustomResponseBodies
 * @property CaptchaConfig $CaptchaConfig
 * @property ChallengeConfig $ChallengeConfig
 * @property list<string> $TokenDomains
 * @property AssociationConfig $AssociationConfig
 * @property bool $RetrofittedByFirewallManager
 */
class WebACL extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     ARN: string,
     *     DefaultAction: DefaultAction,
     *     Description?: string,
     *     Rules?: list<Rule>,
     *     VisibilityConfig: VisibilityConfig,
     *     Capacity?: int,
     *     PreProcessFirewallManagerRuleGroups?: list<FirewallManagerRuleGroup>,
     *     PostProcessFirewallManagerRuleGroups?: list<FirewallManagerRuleGroup>,
     *     ManagedByFirewallManager?: bool,
     *     LabelNamespace?: string,
     *     CustomResponseBodies?: array<string, CustomResponseBody>,
     *     CaptchaConfig?: CaptchaConfig,
     *     ChallengeConfig?: ChallengeConfig,
     *     TokenDomains?: list<string>,
     *     AssociationConfig?: AssociationConfig,
     *     RetrofittedByFirewallManager?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
