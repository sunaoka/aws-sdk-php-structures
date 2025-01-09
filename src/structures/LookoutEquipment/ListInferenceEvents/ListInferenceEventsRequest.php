<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $InferenceSchedulerName
 * @property \Aws\Api\DateTimeResult $IntervalStartTime
 * @property \Aws\Api\DateTimeResult $IntervalEndTime
 */
class ListInferenceEventsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     InferenceSchedulerName: string,
     *     IntervalStartTime: \Aws\Api\DateTimeResult,
     *     IntervalEndTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
