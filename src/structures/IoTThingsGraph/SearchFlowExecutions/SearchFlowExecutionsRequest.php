<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchFlowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $systemInstanceId
 * @property string|null $flowExecutionId
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class SearchFlowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     systemInstanceId: string,
     *     flowExecutionId?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
