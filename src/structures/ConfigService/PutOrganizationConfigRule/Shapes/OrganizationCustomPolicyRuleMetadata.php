<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutOrganizationConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property list<'ConfigurationItemChangeNotification'|'OversizedConfigurationItemChangeNotification'>|null $OrganizationConfigRuleTriggerTypes
 * @property string|null $InputParameters
 * @property 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'|null $MaximumExecutionFrequency
 * @property list<string>|null $ResourceTypesScope
 * @property string|null $ResourceIdScope
 * @property string|null $TagKeyScope
 * @property string|null $TagValueScope
 * @property string $PolicyRuntime
 * @property string $PolicyText
 * @property list<string>|null $DebugLogDeliveryAccounts
 */
class OrganizationCustomPolicyRuleMetadata extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     OrganizationConfigRuleTriggerTypes?: list<'ConfigurationItemChangeNotification'|'OversizedConfigurationItemChangeNotification'>|null,
     *     InputParameters?: string|null,
     *     MaximumExecutionFrequency?: 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'|null,
     *     ResourceTypesScope?: list<string>|null,
     *     ResourceIdScope?: string|null,
     *     TagKeyScope?: string|null,
     *     TagValueScope?: string|null,
     *     PolicyRuntime: string,
     *     PolicyText: string,
     *     DebugLogDeliveryAccounts?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
