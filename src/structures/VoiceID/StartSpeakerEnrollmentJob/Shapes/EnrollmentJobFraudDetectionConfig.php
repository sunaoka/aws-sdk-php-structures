<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartSpeakerEnrollmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IGNORE'|'FAIL'|null $FraudDetectionAction
 * @property int<0, 100>|null $RiskThreshold
 * @property list<string>|null $WatchlistIds
 */
class EnrollmentJobFraudDetectionConfig extends Shape
{
    /**
     * @param array{
     *     FraudDetectionAction?: 'IGNORE'|'FAIL'|null,
     *     RiskThreshold?: int<0, 100>|null,
     *     WatchlistIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
