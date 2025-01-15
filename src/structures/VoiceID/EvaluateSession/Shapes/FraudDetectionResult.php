<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $AudioAggregationEndedAt
 * @property \Aws\Api\DateTimeResult|null $AudioAggregationStartedAt
 * @property FraudDetectionConfiguration|null $Configuration
 * @property 'HIGH_RISK'|'LOW_RISK'|'NOT_ENOUGH_SPEECH'|null $Decision
 * @property string|null $FraudDetectionResultId
 * @property list<'KNOWN_FRAUDSTER'|'VOICE_SPOOFING'>|null $Reasons
 * @property FraudRiskDetails|null $RiskDetails
 */
class FraudDetectionResult extends Shape
{
    /**
     * @param array{
     *     AudioAggregationEndedAt?: \Aws\Api\DateTimeResult|null,
     *     AudioAggregationStartedAt?: \Aws\Api\DateTimeResult|null,
     *     Configuration?: FraudDetectionConfiguration|null,
     *     Decision?: 'HIGH_RISK'|'LOW_RISK'|'NOT_ENOUGH_SPEECH'|null,
     *     FraudDetectionResultId?: string|null,
     *     Reasons?: list<'KNOWN_FRAUDSTER'|'VOICE_SPOOFING'>|null,
     *     RiskDetails?: FraudRiskDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
