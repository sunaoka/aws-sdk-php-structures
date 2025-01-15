<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigRuleName
 * @property string|null $ConfigRuleArn
 * @property string|null $ConfigRuleId
 * @property string|null $Description
 * @property Scope|null $Scope
 * @property Source $Source
 * @property string|null $InputParameters
 * @property 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'|null $MaximumExecutionFrequency
 * @property 'ACTIVE'|'DELETING'|'DELETING_RESULTS'|'EVALUATING'|null $ConfigRuleState
 * @property string|null $CreatedBy
 * @property list<EvaluationModeConfiguration>|null $EvaluationModes
 */
class ConfigRule extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string|null,
     *     ConfigRuleArn?: string|null,
     *     ConfigRuleId?: string|null,
     *     Description?: string|null,
     *     Scope?: Scope|null,
     *     Source: Source,
     *     InputParameters?: string|null,
     *     MaximumExecutionFrequency?: 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'|null,
     *     ConfigRuleState?: 'ACTIVE'|'DELETING'|'DELETING_RESULTS'|'EVALUATING'|null,
     *     CreatedBy?: string|null,
     *     EvaluationModes?: list<EvaluationModeConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
