<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutOrganizationConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string $LambdaFunctionArn
 * @property list<'ConfigurationItemChangeNotification'|'OversizedConfigurationItemChangeNotification'|'ScheduledNotification'> $OrganizationConfigRuleTriggerTypes
 * @property string|null $InputParameters
 * @property 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'|null $MaximumExecutionFrequency
 * @property list<string>|null $ResourceTypesScope
 * @property string|null $ResourceIdScope
 * @property string|null $TagKeyScope
 * @property string|null $TagValueScope
 */
class OrganizationCustomRuleMetadata extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     LambdaFunctionArn: string,
     *     OrganizationConfigRuleTriggerTypes: list<'ConfigurationItemChangeNotification'|'OversizedConfigurationItemChangeNotification'|'ScheduledNotification'>,
     *     InputParameters?: string|null,
     *     MaximumExecutionFrequency?: 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'|null,
     *     ResourceTypesScope?: list<string>|null,
     *     ResourceIdScope?: string|null,
     *     TagKeyScope?: string|null,
     *     TagValueScope?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
