<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GenerateRuleConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $prompt
 * @property 'WAF' $ruleFirewallType
 * @property 'CONFIGURATION'|'INSPECTION' $ruleType
 * @property 'DefaultAction'|'VisibilityConfig'|'CaptchaConfig'|'ChallengeConfig'|'CustomResponseBodies'|'LoggingConfiguration'|'DataProtectionConfig'|'AssociationConfig'|'OnSourceDDoSProtectionConfig'|'TokenDomains'|null $wafConfigDataType
 * @property string|null $currentConfiguration
 * @property string|null $clientToken
 */
class GenerateRuleConfigurationRequest extends Request
{
    /**
     * @param array{
     *     prompt: string,
     *     ruleFirewallType: 'WAF',
     *     ruleType: 'CONFIGURATION'|'INSPECTION',
     *     wafConfigDataType?: 'DefaultAction'|'VisibilityConfig'|'CaptchaConfig'|'ChallengeConfig'|'CustomResponseBodies'|'LoggingConfiguration'|'DataProtectionConfig'|'AssociationConfig'|'OnSourceDDoSProtectionConfig'|'TokenDomains'|null,
     *     currentConfiguration?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
