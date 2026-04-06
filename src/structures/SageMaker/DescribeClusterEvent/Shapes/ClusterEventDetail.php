<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventId
 * @property string $ClusterArn
 * @property string $ClusterName
 * @property string|null $InstanceGroupName
 * @property string|null $InstanceId
 * @property 'Cluster'|'InstanceGroup'|'Instance' $ResourceType
 * @property \Aws\Api\DateTimeResult $EventTime
 * @property EventDetails|null $EventDetails
 * @property string|null $Description
 */
class ClusterEventDetail extends Shape
{
    /**
     * @param array{
     *     EventId: string,
     *     ClusterArn: string,
     *     ClusterName: string,
     *     InstanceGroupName?: string|null,
     *     InstanceId?: string|null,
     *     ResourceType: 'Cluster'|'InstanceGroup'|'Instance',
     *     EventTime: \Aws\Api\DateTimeResult,
     *     EventDetails?: EventDetails|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
