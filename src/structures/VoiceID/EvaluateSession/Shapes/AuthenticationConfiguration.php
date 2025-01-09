<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $AcceptanceThreshold
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{AcceptanceThreshold: int<0, 100>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
