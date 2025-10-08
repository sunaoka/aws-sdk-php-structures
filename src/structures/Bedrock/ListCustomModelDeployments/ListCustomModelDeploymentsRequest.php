<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListCustomModelDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $createdBefore
 * @property \Aws\Api\DateTimeResult|null $createdAfter
 * @property string|null $nameContains
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'CreationTime'|null $sortBy
 * @property 'Ascending'|'Descending'|null $sortOrder
 * @property 'Creating'|'Active'|'Failed'|null $statusEquals
 * @property string|null $modelArnEquals
 */
class ListCustomModelDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     createdBefore?: \Aws\Api\DateTimeResult|null,
     *     createdAfter?: \Aws\Api\DateTimeResult|null,
     *     nameContains?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     sortBy?: 'CreationTime'|null,
     *     sortOrder?: 'Ascending'|'Descending'|null,
     *     statusEquals?: 'Creating'|'Active'|'Failed'|null,
     *     modelArnEquals?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
