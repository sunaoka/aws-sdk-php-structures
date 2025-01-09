<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $AudioAggregationEndedAt
 * @property \Aws\Api\DateTimeResult $AudioAggregationStartedAt
 * @property FraudDetectionConfiguration $Configuration
 * @property 'HIGH_RISK'|'LOW_RISK'|'NOT_ENOUGH_SPEECH' $Decision
 * @property string $FraudDetectionResultId
 * @property list<'KNOWN_FRAUDSTER'|'VOICE_SPOOFING'> $Reasons
 * @property FraudRiskDetails $RiskDetails
 */
class FraudDetectionResult extends Shape
{
    /**
     * @param array{
     *     AudioAggregationEndedAt?: \Aws\Api\DateTimeResult,
     *     AudioAggregationStartedAt?: \Aws\Api\DateTimeResult,
     *     Configuration?: FraudDetectionConfiguration,
     *     Decision?: 'HIGH_RISK'|'LOW_RISK'|'NOT_ENOUGH_SPEECH',
     *     FraudDetectionResultId?: string,
     *     Reasons?: list<'KNOWN_FRAUDSTER'|'VOICE_SPOOFING'>,
     *     RiskDetails?: FraudRiskDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
