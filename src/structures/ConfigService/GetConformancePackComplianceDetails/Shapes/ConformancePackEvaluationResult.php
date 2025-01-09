<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA' $ComplianceType
 * @property EvaluationResultIdentifier $EvaluationResultIdentifier
 * @property \Aws\Api\DateTimeResult $ConfigRuleInvokedTime
 * @property \Aws\Api\DateTimeResult $ResultRecordedTime
 * @property string $Annotation
 */
class ConformancePackEvaluationResult extends Shape
{
    /**
     * @param array{
     *     ComplianceType: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA',
     *     EvaluationResultIdentifier: EvaluationResultIdentifier,
     *     ConfigRuleInvokedTime: \Aws\Api\DateTimeResult,
     *     ResultRecordedTime: \Aws\Api\DateTimeResult,
     *     Annotation?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
