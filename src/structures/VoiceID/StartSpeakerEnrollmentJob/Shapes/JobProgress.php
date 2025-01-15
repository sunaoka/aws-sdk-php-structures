<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartSpeakerEnrollmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $PercentComplete
 */
class JobProgress extends Shape
{
    /**
     * @param array{PercentComplete?: int<0, 100>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
