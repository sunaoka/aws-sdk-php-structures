<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $EvaluationMessage
 * @property array<string, double> $EvaluatedMetrics
 */
class DataQualityAnalyzerResult extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     EvaluationMessage?: string,
     *     EvaluatedMetrics?: array<string, double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
