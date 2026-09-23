<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $policyName
 * @property string|null $policyDescription
 * @property int<1, max> $priority
 * @property list<Shapes\TemplateOrRuleReference>|null $associatedTemplateAndRuleList
 * @property 'WAF'|'SHIELD_ADVANCED' $firewallType
 * @property Shapes\PolicyConfiguration $policyConfiguration
 * @property bool|null $isPublished
 * @property array<string, string>|null $tags
 */
class CreatePolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     policyName: string,
     *     policyDescription?: string|null,
     *     priority: int<1, max>,
     *     associatedTemplateAndRuleList?: list<Shapes\TemplateOrRuleReference>|null,
     *     firewallType: 'WAF'|'SHIELD_ADVANCED',
     *     policyConfiguration: Shapes\PolicyConfiguration,
     *     isPublished?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
