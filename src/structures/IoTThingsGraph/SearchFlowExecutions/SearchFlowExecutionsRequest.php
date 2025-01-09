<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchFlowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $systemInstanceId
 * @property string $flowExecutionId
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $nextToken
 * @property int $maxResults
 */
class SearchFlowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     systemInstanceId: string,
     *     flowExecutionId?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
