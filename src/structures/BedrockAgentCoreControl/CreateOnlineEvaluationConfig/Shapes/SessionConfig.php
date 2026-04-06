<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOnlineEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1440> $sessionTimeoutMinutes
 */
class SessionConfig extends Shape
{
    /**
     * @param array{sessionTimeoutMinutes: int<1, 1440>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
