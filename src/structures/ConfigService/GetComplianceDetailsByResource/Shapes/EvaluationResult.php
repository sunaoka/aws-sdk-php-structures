<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceDetailsByResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationResultIdentifier $EvaluationResultIdentifier
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA' $ComplianceType
 * @property \Aws\Api\DateTimeResult $ResultRecordedTime
 * @property \Aws\Api\DateTimeResult $ConfigRuleInvokedTime
 * @property string $Annotation
 * @property string $ResultToken
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     EvaluationResultIdentifier?: EvaluationResultIdentifier,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA',
     *     ResultRecordedTime?: \Aws\Api\DateTimeResult,
     *     ConfigRuleInvokedTime?: \Aws\Api\DateTimeResult,
     *     Annotation?: string,
     *     ResultToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
