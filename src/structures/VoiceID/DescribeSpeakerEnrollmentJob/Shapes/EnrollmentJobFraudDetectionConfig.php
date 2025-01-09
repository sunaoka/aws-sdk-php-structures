<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeSpeakerEnrollmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IGNORE'|'FAIL' $FraudDetectionAction
 * @property int<0, 100> $RiskThreshold
 * @property list<string> $WatchlistIds
 */
class EnrollmentJobFraudDetectionConfig extends Shape
{
    /**
     * @param array{
     *     FraudDetectionAction?: 'IGNORE'|'FAIL',
     *     RiskThreshold?: int<0, 100>,
     *     WatchlistIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
