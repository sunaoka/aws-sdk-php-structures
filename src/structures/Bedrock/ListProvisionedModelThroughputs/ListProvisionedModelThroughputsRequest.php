<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListProvisionedModelThroughputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $creationTimeBefore
 * @property 'Creating'|'InService'|'Updating'|'Failed'|null $statusEquals
 * @property string|null $modelArnEquals
 * @property string|null $nameContains
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'CreationTime'|null $sortBy
 * @property 'Ascending'|'Descending'|null $sortOrder
 */
class ListProvisionedModelThroughputsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     creationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     statusEquals?: 'Creating'|'InService'|'Updating'|'Failed'|null,
     *     modelArnEquals?: string|null,
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
