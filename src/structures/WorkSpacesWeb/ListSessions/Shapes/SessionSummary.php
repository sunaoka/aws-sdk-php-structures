<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $portalArn
 * @property string|null $sessionId
 * @property string|null $username
 * @property 'Active'|'Terminated'|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     portalArn?: string|null,
     *     sessionId?: string|null,
     *     username?: string|null,
     *     status?: 'Active'|'Terminated'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
