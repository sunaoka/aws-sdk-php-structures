<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartSpeakerEnrollmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IGNORE'|'FAIL' $FraudDetectionAction
 * @property int $RiskThreshold
 * @property list<string> $WatchlistIds
 */
class EnrollmentJobFraudDetectionConfig extends Shape
{
    /**
     * @param array{
     *     FraudDetectionAction?: 'IGNORE'|'FAIL',
     *     RiskThreshold?: int,
     *     WatchlistIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
