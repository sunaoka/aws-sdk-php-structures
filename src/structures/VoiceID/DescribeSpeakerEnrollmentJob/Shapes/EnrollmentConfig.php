<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeSpeakerEnrollmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SKIP'|'OVERWRITE'|null $ExistingEnrollmentAction
 * @property EnrollmentJobFraudDetectionConfig|null $FraudDetectionConfig
 */
class EnrollmentConfig extends Shape
{
    /**
     * @param array{
     *     ExistingEnrollmentAction?: 'SKIP'|'OVERWRITE'|null,
     *     FraudDetectionConfig?: EnrollmentJobFraudDetectionConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
