<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $requestId
 * @property string|null $sessionId
 * @property list<string>|null $logGroupIdentifiers
 * @property list<string>|null $logStreamNames
 * @property list<string>|null $logStreamNamePrefixes
 * @property string|null $logEventFilterPattern
 */
class LiveTailSessionStart extends Shape
{
    /**
     * @param array{
     *     requestId?: string|null,
     *     sessionId?: string|null,
     *     logGroupIdentifiers?: list<string>|null,
     *     logStreamNames?: list<string>|null,
     *     logStreamNamePrefixes?: list<string>|null,
     *     logEventFilterPattern?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
