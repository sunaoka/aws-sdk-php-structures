<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceDetailsByConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationResultIdentifier|null $EvaluationResultIdentifier
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'|null $ComplianceType
 * @property \Aws\Api\DateTimeResult|null $ResultRecordedTime
 * @property \Aws\Api\DateTimeResult|null $ConfigRuleInvokedTime
 * @property string|null $Annotation
 * @property string|null $ResultToken
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     EvaluationResultIdentifier?: EvaluationResultIdentifier|null,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'|null,
     *     ResultRecordedTime?: \Aws\Api\DateTimeResult|null,
     *     ConfigRuleInvokedTime?: \Aws\Api\DateTimeResult|null,
     *     Annotation?: string|null,
     *     ResultToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
