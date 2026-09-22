<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListTelemetryQuerySessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastActivityAt
 * @property string|null $sessionName
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastActivityAt?: \Aws\Api\DateTimeResult|null,
     *     sessionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
