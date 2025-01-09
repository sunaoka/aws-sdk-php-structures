<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxRecentSessions
 */
class SessionSummaryConfiguration extends Shape
{
    /**
     * @param array{maxRecentSessions?: int<1, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
