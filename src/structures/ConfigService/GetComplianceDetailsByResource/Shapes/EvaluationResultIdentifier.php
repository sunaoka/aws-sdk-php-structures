<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceDetailsByResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationResultQualifier $EvaluationResultQualifier
 * @property \Aws\Api\DateTimeResult $OrderingTimestamp
 * @property string $ResourceEvaluationId
 */
class EvaluationResultIdentifier extends Shape
{
    /**
     * @param array{
     *     EvaluationResultQualifier?: EvaluationResultQualifier,
     *     OrderingTimestamp?: \Aws\Api\DateTimeResult,
     *     ResourceEvaluationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
