<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property string|null $NameContains
 * @property 'Created'|'Blocked'|'Running'|'Failed'|'Scheduled'|'Stopping'|'Stopped'|'Expired'|'Deleting'|'DeletionFailed'|null $StatusEquals
 */
class ListTrainingSessionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     NameContains?: string|null,
     *     StatusEquals?: 'Created'|'Blocked'|'Running'|'Failed'|'Scheduled'|'Stopping'|'Stopped'|'Expired'|'Deleting'|'DeletionFailed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
