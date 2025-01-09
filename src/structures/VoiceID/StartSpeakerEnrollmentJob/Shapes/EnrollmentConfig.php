<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartSpeakerEnrollmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SKIP'|'OVERWRITE' $ExistingEnrollmentAction
 * @property EnrollmentJobFraudDetectionConfig $FraudDetectionConfig
 */
class EnrollmentConfig extends Shape
{
    /**
     * @param array{
     *     ExistingEnrollmentAction?: 'SKIP'|'OVERWRITE',
     *     FraudDetectionConfig?: EnrollmentJobFraudDetectionConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
