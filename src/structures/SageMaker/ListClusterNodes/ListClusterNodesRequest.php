<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property string|null $InstanceGroupNameContains
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'CREATION_TIME'|'NAME'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListClusterNodesRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     InstanceGroupNameContains?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     SortBy?: 'CREATION_TIME'|'NAME'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
