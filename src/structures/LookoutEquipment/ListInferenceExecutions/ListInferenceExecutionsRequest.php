<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property string $InferenceSchedulerName
 * @property \Aws\Api\DateTimeResult|null $DataStartTimeAfter
 * @property \Aws\Api\DateTimeResult|null $DataEndTimeBefore
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|null $Status
 */
class ListInferenceExecutionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     InferenceSchedulerName: string,
     *     DataStartTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     DataEndTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
