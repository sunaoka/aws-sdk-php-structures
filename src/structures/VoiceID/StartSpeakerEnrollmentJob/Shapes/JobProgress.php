<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartSpeakerEnrollmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PercentComplete
 */
class JobProgress extends Shape
{
    /**
     * @param array{PercentComplete?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
