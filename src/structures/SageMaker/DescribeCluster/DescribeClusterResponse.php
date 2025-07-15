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
 * @property list<Shapes\ClusterRestrictedInstanceGroupDetails>|null $RestrictedInstanceGroups
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property Shapes\ClusterOrchestrator|null $Orchestrator
 * @property 'Automatic'|'None'|null $NodeRecovery
 */
class DescribeClusterResponse extends Response
{
}
