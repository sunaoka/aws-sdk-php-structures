<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelCopyJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $creationTimeAfter
 * @property \Aws\Api\DateTimeResult $creationTimeBefore
 * @property 'InProgress'|'Completed'|'Failed' $statusEquals
 * @property string $sourceAccountEquals
 * @property string $sourceModelArnEquals
 * @property string $targetModelNameContains
 * @property int $maxResults
 * @property string $nextToken
 * @property 'CreationTime' $sortBy
 * @property 'Ascending'|'Descending' $sortOrder
 */
class ListModelCopyJobsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeAfter?: \Aws\Api\DateTimeResult,
     *     creationTimeBefore?: \Aws\Api\DateTimeResult,
     *     statusEquals?: 'InProgress'|'Completed'|'Failed',
     *     sourceAccountEquals?: string,
     *     sourceModelArnEquals?: string,
     *     targetModelNameContains?: string,
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
