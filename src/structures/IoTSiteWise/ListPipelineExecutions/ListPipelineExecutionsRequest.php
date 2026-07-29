<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListPipelineExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $pipelineName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property 'NOT_STARTED'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|null $state
 * @property \Aws\Api\DateTimeResult|null $startTimeAfter
 * @property \Aws\Api\DateTimeResult|null $startTimeBefore
 * @property \Aws\Api\DateTimeResult|null $endTimeAfter
 * @property \Aws\Api\DateTimeResult|null $endTimeBefore
 */
class ListPipelineExecutionsRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     pipelineName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     state?: 'NOT_STARTED'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|null,
     *     startTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     startTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     endTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     endTimeBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
