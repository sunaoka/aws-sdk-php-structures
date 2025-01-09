<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $EvaluationMessage
 * @property 'PASS'|'FAIL'|'ERROR' $Result
 * @property array<string, double> $EvaluatedMetrics
 * @property string $EvaluatedRule
 */
class DataQualityRuleResult extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     EvaluationMessage?: string,
     *     Result?: 'PASS'|'FAIL'|'ERROR',
     *     EvaluatedMetrics?: array<string, double>,
     *     EvaluatedRule?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
