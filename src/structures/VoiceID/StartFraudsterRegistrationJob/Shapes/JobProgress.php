<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartFraudsterRegistrationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $PercentComplete
 */
class JobProgress extends Shape
{
    /**
     * @param array{PercentComplete?: int<0, 100>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
