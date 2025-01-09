<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $requestId
 * @property string $sessionId
 * @property list<string> $logGroupIdentifiers
 * @property list<string> $logStreamNames
 * @property list<string> $logStreamNamePrefixes
 * @property string $logEventFilterPattern
 */
class LiveTailSessionStart extends Shape
{
    /**
     * @param array{
     *     requestId?: string,
     *     sessionId?: string,
     *     logGroupIdentifiers?: list<string>,
     *     logStreamNames?: list<string>,
     *     logStreamNamePrefixes?: list<string>,
     *     logEventFilterPattern?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
