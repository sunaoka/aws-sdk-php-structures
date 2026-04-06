<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LoginPath
 * @property 'JSON'|'FORM_ENCODED'|null $PayloadType
 * @property UsernameField|null $UsernameField
 * @property PasswordField|null $PasswordField
 * @property AWSManagedRulesBotControlRuleSet|null $AWSManagedRulesBotControlRuleSet
 * @property AWSManagedRulesATPRuleSet|null $AWSManagedRulesATPRuleSet
 * @property AWSManagedRulesACFPRuleSet|null $AWSManagedRulesACFPRuleSet
 */
class ManagedRuleGroupConfig extends Shape
{
    /**
     * @param array{
     *     LoginPath?: string|null,
     *     PayloadType?: 'JSON'|'FORM_ENCODED'|null,
     *     UsernameField?: UsernameField|null,
     *     PasswordField?: PasswordField|null,
     *     AWSManagedRulesBotControlRuleSet?: AWSManagedRulesBotControlRuleSet|null,
     *     AWSManagedRulesATPRuleSet?: AWSManagedRulesATPRuleSet|null,
     *     AWSManagedRulesACFPRuleSet?: AWSManagedRulesACFPRuleSet|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
