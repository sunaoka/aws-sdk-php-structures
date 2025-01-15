<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStageSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sessionId
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class StageSession extends Shape
{
    /**
     * @param array{
     *     sessionId?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
