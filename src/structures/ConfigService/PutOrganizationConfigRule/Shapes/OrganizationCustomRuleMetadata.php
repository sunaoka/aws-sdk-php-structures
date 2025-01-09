<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutOrganizationConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $LambdaFunctionArn
 * @property list<'ConfigurationItemChangeNotification'|'OversizedConfigurationItemChangeNotification'|'ScheduledNotification'> $OrganizationConfigRuleTriggerTypes
 * @property string $InputParameters
 * @property 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours' $MaximumExecutionFrequency
 * @property list<string> $ResourceTypesScope
 * @property string $ResourceIdScope
 * @property string $TagKeyScope
 * @property string $TagValueScope
 */
class OrganizationCustomRuleMetadata extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     LambdaFunctionArn: string,
     *     OrganizationConfigRuleTriggerTypes: list<'ConfigurationItemChangeNotification'|'OversizedConfigurationItemChangeNotification'|'ScheduledNotification'>,
     *     InputParameters?: string,
     *     MaximumExecutionFrequency?: 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours',
     *     ResourceTypesScope?: list<string>,
     *     ResourceIdScope?: string,
     *     TagKeyScope?: string,
     *     TagValueScope?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
