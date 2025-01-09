<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListEventLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $eventName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListEventLogsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     eventName?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
