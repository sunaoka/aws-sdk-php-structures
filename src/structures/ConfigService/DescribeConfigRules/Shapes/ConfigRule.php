<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigRuleName
 * @property string $ConfigRuleArn
 * @property string $ConfigRuleId
 * @property string $Description
 * @property Scope $Scope
 * @property Source $Source
 * @property string $InputParameters
 * @property 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours' $MaximumExecutionFrequency
 * @property 'ACTIVE'|'DELETING'|'DELETING_RESULTS'|'EVALUATING' $ConfigRuleState
 * @property string $CreatedBy
 * @property list<EvaluationModeConfiguration> $EvaluationModes
 */
class ConfigRule extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string,
     *     ConfigRuleArn?: string,
     *     ConfigRuleId?: string,
     *     Description?: string,
     *     Scope?: Scope,
     *     Source: Source,
     *     InputParameters?: string,
     *     MaximumExecutionFrequency?: 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours',
     *     ConfigRuleState?: 'ACTIVE'|'DELETING'|'DELETING_RESULTS'|'EVALUATING',
     *     CreatedBy?: string,
     *     EvaluationModes?: list<EvaluationModeConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
