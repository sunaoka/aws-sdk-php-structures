<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $EvaluationMessage
 * @property 'PASS'|'FAIL'|'ERROR'|null $Result
 * @property array<string, double>|null $EvaluatedMetrics
 * @property string|null $EvaluatedRule
 * @property array<string, double>|null $RuleMetrics
 * @property array<string, string>|null $Labels
 */
class DataQualityRuleResult extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     EvaluationMessage?: string|null,
     *     Result?: 'PASS'|'FAIL'|'ERROR'|null,
     *     EvaluatedMetrics?: array<string, double>|null,
     *     EvaluatedRule?: string|null,
     *     RuleMetrics?: array<string, double>|null,
     *     Labels?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
