<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property string $InstanceGroupNameContains
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'CREATION_TIME'|'NAME' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListClusterNodesRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     InstanceGroupNameContains?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     SortBy?: 'CREATION_TIME'|'NAME',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
