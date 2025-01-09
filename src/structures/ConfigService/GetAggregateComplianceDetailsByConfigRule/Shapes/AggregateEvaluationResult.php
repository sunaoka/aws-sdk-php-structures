<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateComplianceDetailsByConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationResultIdentifier $EvaluationResultIdentifier
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA' $ComplianceType
 * @property \Aws\Api\DateTimeResult $ResultRecordedTime
 * @property \Aws\Api\DateTimeResult $ConfigRuleInvokedTime
 * @property string $Annotation
 * @property string $AccountId
 * @property string $AwsRegion
 */
class AggregateEvaluationResult extends Shape
{
    /**
     * @param array{
     *     EvaluationResultIdentifier?: EvaluationResultIdentifier,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA',
     *     ResultRecordedTime?: \Aws\Api\DateTimeResult,
     *     ConfigRuleInvokedTime?: \Aws\Api\DateTimeResult,
     *     Annotation?: string,
     *     AccountId?: string,
     *     AwsRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
