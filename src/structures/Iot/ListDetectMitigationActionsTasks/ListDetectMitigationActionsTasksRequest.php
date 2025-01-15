<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class ListDetectMitigationActionsTasksRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
