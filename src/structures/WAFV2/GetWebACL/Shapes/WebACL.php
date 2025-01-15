<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $ARN
 * @property DefaultAction $DefaultAction
 * @property string|null $Description
 * @property list<Rule>|null $Rules
 * @property VisibilityConfig $VisibilityConfig
 * @property int<0, max>|null $Capacity
 * @property list<FirewallManagerRuleGroup>|null $PreProcessFirewallManagerRuleGroups
 * @property list<FirewallManagerRuleGroup>|null $PostProcessFirewallManagerRuleGroups
 * @property bool|null $ManagedByFirewallManager
 * @property string|null $LabelNamespace
 * @property array<string, CustomResponseBody>|null $CustomResponseBodies
 * @property CaptchaConfig|null $CaptchaConfig
 * @property ChallengeConfig|null $ChallengeConfig
 * @property list<string>|null $TokenDomains
 * @property AssociationConfig|null $AssociationConfig
 * @property bool|null $RetrofittedByFirewallManager
 */
class WebACL extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     ARN: string,
     *     DefaultAction: DefaultAction,
     *     Description?: string|null,
     *     Rules?: list<Rule>|null,
     *     VisibilityConfig: VisibilityConfig,
     *     Capacity?: int<0, max>|null,
     *     PreProcessFirewallManagerRuleGroups?: list<FirewallManagerRuleGroup>|null,
     *     PostProcessFirewallManagerRuleGroups?: list<FirewallManagerRuleGroup>|null,
     *     ManagedByFirewallManager?: bool|null,
     *     LabelNamespace?: string|null,
     *     CustomResponseBodies?: array<string, CustomResponseBody>|null,
     *     CaptchaConfig?: CaptchaConfig|null,
     *     ChallengeConfig?: ChallengeConfig|null,
     *     TokenDomains?: list<string>|null,
     *     AssociationConfig?: AssociationConfig|null,
     *     RetrofittedByFirewallManager?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
