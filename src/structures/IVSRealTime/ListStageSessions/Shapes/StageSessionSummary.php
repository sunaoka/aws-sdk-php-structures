<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListStageSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $sessionId
 * @property \Aws\Api\DateTimeResult|null $startTime
 */
class StageSessionSummary extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     sessionId?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
