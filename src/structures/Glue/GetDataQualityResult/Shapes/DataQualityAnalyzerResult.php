<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $EvaluationMessage
 * @property array<string, double>|null $EvaluatedMetrics
 */
class DataQualityAnalyzerResult extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     EvaluationMessage?: string|null,
     *     EvaluatedMetrics?: array<string, double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
