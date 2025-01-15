<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $taskId
 * @property string|null $violationId
 * @property string|null $thingName
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListDetectMitigationActionsExecutionsRequest extends Request
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     violationId?: string|null,
     *     thingName?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
