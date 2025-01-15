<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListEventLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string|null $eventName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListEventLogsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     eventName?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
