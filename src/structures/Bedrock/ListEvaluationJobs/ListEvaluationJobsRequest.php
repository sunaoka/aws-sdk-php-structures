<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEvaluationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $creationTimeBefore
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|null $statusEquals
 * @property 'ModelEvaluation'|'RagEvaluation'|null $applicationTypeEquals
 * @property string|null $nameContains
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'CreationTime'|null $sortBy
 * @property 'Ascending'|'Descending'|null $sortOrder
 */
class ListEvaluationJobsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     creationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     statusEquals?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|null,
     *     applicationTypeEquals?: 'ModelEvaluation'|'RagEvaluation'|null,
     *     nameContains?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     sortBy?: 'CreationTime'|null,
     *     sortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
