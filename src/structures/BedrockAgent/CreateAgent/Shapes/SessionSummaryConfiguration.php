<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $maxRecentSessions
 */
class SessionSummaryConfiguration extends Shape
{
    /**
     * @param array{maxRecentSessions?: int<1, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
