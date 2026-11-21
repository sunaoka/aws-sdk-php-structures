<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $templateName
 * @property string|null $templateDescription
 * @property list<Shapes\RuleReference> $associatedRuleList
 * @property 'WAF'|'IGW_FIREWALL' $firewallType
 * @property bool|null $isPublished
 * @property array<string, string>|null $tags
 */
class CreateTemplateRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     templateName: string,
     *     templateDescription?: string|null,
     *     associatedRuleList: list<Shapes\RuleReference>,
     *     firewallType: 'WAF'|'IGW_FIREWALL',
     *     isPublished?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
