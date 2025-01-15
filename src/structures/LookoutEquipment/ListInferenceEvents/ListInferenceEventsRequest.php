<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property string $InferenceSchedulerName
 * @property \Aws\Api\DateTimeResult $IntervalStartTime
 * @property \Aws\Api\DateTimeResult $IntervalEndTime
 */
class ListInferenceEventsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
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
