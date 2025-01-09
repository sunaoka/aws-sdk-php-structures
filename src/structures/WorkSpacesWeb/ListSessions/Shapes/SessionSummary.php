<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $portalArn
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'Active'|'Terminated' $status
 * @property string $username
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult,
     *     portalArn?: string,
     *     sessionId?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     status?: 'Active'|'Terminated',
     *     username?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
