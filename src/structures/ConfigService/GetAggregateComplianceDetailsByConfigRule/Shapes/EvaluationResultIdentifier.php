<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateComplianceDetailsByConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationResultQualifier|null $EvaluationResultQualifier
 * @property \Aws\Api\DateTimeResult|null $OrderingTimestamp
 * @property string|null $ResourceEvaluationId
 */
class EvaluationResultIdentifier extends Shape
{
    /**
     * @param array{
     *     EvaluationResultQualifier?: EvaluationResultQualifier|null,
     *     OrderingTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ResourceEvaluationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
