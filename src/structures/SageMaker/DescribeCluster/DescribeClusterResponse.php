<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterArn
 * @property string $ClusterName
 * @property 'Creating'|'Deleting'|'Failed'|'InService'|'RollingBack'|'SystemUpdating'|'Updating' $ClusterStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FailureMessage
 * @property list<Shapes\ClusterInstanceGroupDetails> $InstanceGroups
 * @property Shapes\VpcConfig $VpcConfig
 * @property Shapes\ClusterOrchestrator $Orchestrator
 * @property 'Automatic'|'None' $NodeRecovery
 */
class DescribeClusterResponse extends Response
{
}
