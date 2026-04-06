<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string|null $InstanceGroupName
 * @property string|null $NodeId
 * @property \Aws\Api\DateTimeResult|null $EventTimeAfter
 * @property \Aws\Api\DateTimeResult|null $EventTimeBefore
 * @property 'EventTime'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property 'Cluster'|'InstanceGroup'|'Instance'|null $ResourceType
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListClusterEventsRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     InstanceGroupName?: string|null,
     *     NodeId?: string|null,
     *     EventTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     EventTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'EventTime'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     ResourceType?: 'Cluster'|'InstanceGroup'|'Instance'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
