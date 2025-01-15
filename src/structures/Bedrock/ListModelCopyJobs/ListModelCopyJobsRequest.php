<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelCopyJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $creationTimeBefore
 * @property 'InProgress'|'Completed'|'Failed'|null $statusEquals
 * @property string|null $sourceAccountEquals
 * @property string|null $sourceModelArnEquals
 * @property string|null $targetModelNameContains
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'CreationTime'|null $sortBy
 * @property 'Ascending'|'Descending'|null $sortOrder
 */
class ListModelCopyJobsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     creationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     statusEquals?: 'InProgress'|'Completed'|'Failed'|null,
     *     sourceAccountEquals?: string|null,
     *     sourceModelArnEquals?: string|null,
     *     targetModelNameContains?: string|null,
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
