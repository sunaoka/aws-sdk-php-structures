<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListProvisionedModelThroughputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $creationTimeAfter
 * @property \Aws\Api\DateTimeResult $creationTimeBefore
 * @property 'Creating'|'InService'|'Updating'|'Failed' $statusEquals
 * @property string $modelArnEquals
 * @property string $nameContains
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property 'CreationTime' $sortBy
 * @property 'Ascending'|'Descending' $sortOrder
 */
class ListProvisionedModelThroughputsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeAfter?: \Aws\Api\DateTimeResult,
     *     creationTimeBefore?: \Aws\Api\DateTimeResult,
     *     statusEquals?: 'Creating'|'InService'|'Updating'|'Failed',
     *     modelArnEquals?: string,
     *     nameContains?: string,
     *     maxResults?: int<1, 1000>,
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
