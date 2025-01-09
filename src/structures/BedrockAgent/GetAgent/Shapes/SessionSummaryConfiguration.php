<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxRecentSessions
 */
class SessionSummaryConfiguration extends Shape
{
    /**
     * @param array{maxRecentSessions?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
