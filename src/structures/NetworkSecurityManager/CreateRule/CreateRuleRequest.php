<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $ruleName
 * @property 'WAF' $firewallType
 * @property 'CONFIGURATION'|'INSPECTION' $ruleType
 * @property string|null $ruleDescription
 * @property Shapes\JsonDocument $configuration
 * @property bool|null $isPublished
 * @property array<string, string>|null $tags
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     ruleName: string,
     *     firewallType: 'WAF',
     *     ruleType: 'CONFIGURATION'|'INSPECTION',
     *     ruleDescription?: string|null,
     *     configuration: Shapes\JsonDocument,
     *     isPublished?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
