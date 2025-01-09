<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LoginPath
 * @property 'JSON'|'FORM_ENCODED' $PayloadType
 * @property UsernameField $UsernameField
 * @property PasswordField $PasswordField
 * @property AWSManagedRulesBotControlRuleSet $AWSManagedRulesBotControlRuleSet
 * @property AWSManagedRulesATPRuleSet $AWSManagedRulesATPRuleSet
 * @property AWSManagedRulesACFPRuleSet $AWSManagedRulesACFPRuleSet
 */
class ManagedRuleGroupConfig extends Shape
{
    /**
     * @param array{
     *     LoginPath?: string,
     *     PayloadType?: 'JSON'|'FORM_ENCODED',
     *     UsernameField?: UsernameField,
     *     PasswordField?: PasswordField,
     *     AWSManagedRulesBotControlRuleSet?: AWSManagedRulesBotControlRuleSet,
     *     AWSManagedRulesATPRuleSet?: AWSManagedRulesATPRuleSet,
     *     AWSManagedRulesACFPRuleSet?: AWSManagedRulesACFPRuleSet
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
