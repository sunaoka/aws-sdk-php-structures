<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 * @property string $InferenceSchedulerName
 * @property \Aws\Api\DateTimeResult $DataStartTimeAfter
 * @property \Aws\Api\DateTimeResult $DataEndTimeBefore
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED' $Status
 */
class ListInferenceExecutionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>,
     *     InferenceSchedulerName: string,
     *     DataStartTimeAfter?: \Aws\Api\DateTimeResult,
     *     DataEndTimeBefore?: \Aws\Api\DateTimeResult,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
