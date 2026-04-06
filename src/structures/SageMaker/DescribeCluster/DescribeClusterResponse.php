<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterArn
 * @property string|null $ClusterName
 * @property 'Creating'|'Deleting'|'Failed'|'InService'|'RollingBack'|'SystemUpdating'|'Updating' $ClusterStatus
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FailureMessage
 * @property list<Shapes\ClusterInstanceGroupDetails> $InstanceGroups
 * @property Shapes\VpcConfig|null $VpcConfig
 */
class DescribeClusterResponse extends Response
{
}
