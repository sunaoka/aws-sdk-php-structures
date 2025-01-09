<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property list<'ConfigurationItemChangeNotification'|'OversizedConfigurationItemChangeNotification'> $OrganizationConfigRuleTriggerTypes
 * @property string $InputParameters
 * @property 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours' $MaximumExecutionFrequency
 * @property list<string> $ResourceTypesScope
 * @property string $ResourceIdScope
 * @property string $TagKeyScope
 * @property string $TagValueScope
 * @property string $PolicyRuntime
 * @property list<string> $DebugLogDeliveryAccounts
 */
class OrganizationCustomPolicyRuleMetadataNoPolicy extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     OrganizationConfigRuleTriggerTypes?: list<'ConfigurationItemChangeNotification'|'OversizedConfigurationItemChangeNotification'>,
     *     InputParameters?: string,
     *     MaximumExecutionFrequency?: 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours',
     *     ResourceTypesScope?: list<string>,
     *     ResourceIdScope?: string,
     *     TagKeyScope?: string,
     *     TagValueScope?: string,
     *     PolicyRuntime?: string,
     *     DebugLogDeliveryAccounts?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
