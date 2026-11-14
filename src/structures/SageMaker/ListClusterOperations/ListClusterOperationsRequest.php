<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property 'InProgress'|'Superseded'|'Done'|null $Status
 * @property 'Scaling'|'DeepHealthCheck'|null $Type
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property 'CreationTime'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListClusterOperationsRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     Status?: 'InProgress'|'Superseded'|'Done'|null,
     *     Type?: 'Scaling'|'DeepHealthCheck'|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'CreationTime'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
