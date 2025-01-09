<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property string $violationId
 * @property string $thingName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int $maxResults
 * @property string $nextToken
 */
class ListDetectMitigationActionsExecutionsRequest extends Request
{
    /**
     * @param array{
     *     taskId?: string,
     *     violationId?: string,
     *     thingName?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
