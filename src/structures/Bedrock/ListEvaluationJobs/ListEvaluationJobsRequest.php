<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEvaluationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $creationTimeAfter
 * @property \Aws\Api\DateTimeResult $creationTimeBefore
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting' $statusEquals
 * @property 'ModelEvaluation'|'RagEvaluation' $applicationTypeEquals
 * @property string $nameContains
 * @property int $maxResults
 * @property string $nextToken
 * @property 'CreationTime' $sortBy
 * @property 'Ascending'|'Descending' $sortOrder
 */
class ListEvaluationJobsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeAfter?: \Aws\Api\DateTimeResult,
     *     creationTimeBefore?: \Aws\Api\DateTimeResult,
     *     statusEquals?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting',
     *     applicationTypeEquals?: 'ModelEvaluation'|'RagEvaluation',
     *     nameContains?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortBy?: 'CreationTime',
     *     sortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
