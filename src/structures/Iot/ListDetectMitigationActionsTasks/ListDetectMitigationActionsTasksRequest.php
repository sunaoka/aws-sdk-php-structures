<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250> $maxResults
 * @property string $nextToken
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class ListDetectMitigationActionsTasksRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 250>,
     *     nextToken?: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
