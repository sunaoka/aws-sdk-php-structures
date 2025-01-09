<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AcceptanceThreshold
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{AcceptanceThreshold: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
