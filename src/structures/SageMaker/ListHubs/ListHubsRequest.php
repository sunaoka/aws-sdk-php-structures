<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHubs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NameContains
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property 'HubName'|'CreationTime'|'HubStatus'|'AccountIdOwner' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListHubsRequest extends Request
{
    /**
     * @param array{
     *     NameContains?: string,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'HubName'|'CreationTime'|'HubStatus'|'AccountIdOwner',
     *     SortOrder?: 'Ascending'|'Descending',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
