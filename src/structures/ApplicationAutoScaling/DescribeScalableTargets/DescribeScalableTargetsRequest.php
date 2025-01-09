<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalableTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ecs'|'elasticmapreduce'|'ec2'|'appstream'|'dynamodb'|'rds'|'sagemaker'|'custom-resource'|'comprehend'|'lambda'|'cassandra'|'kafka'|'elasticache'|'neptune'|'workspaces' $ServiceNamespace
 * @property list<string> $ResourceIds
 * @property 'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'elasticmapreduce:instancegroup:InstanceCount'|'appstream:fleet:DesiredCapacity'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits'|'rds:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredInstanceCount'|'custom-resource:ResourceType:Property'|'comprehend:document-classifier-endpoint:DesiredInferenceUnits'|'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'|'lambda:function:ProvisionedConcurrency'|'cassandra:table:ReadCapacityUnits'|'cassandra:table:WriteCapacityUnits'|'kafka:broker-storage:VolumeSize'|'elasticache:replication-group:NodeGroups'|'elasticache:replication-group:Replicas'|'neptune:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredProvisionedConcurrency'|'sagemaker:inference-component:DesiredCopyCount'|'workspaces:workspacespool:DesiredUserSessions' $ScalableDimension
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeScalableTargetsRequest extends Request
{
    /**
     * @param array{
     *     ServiceNamespace: 'ecs'|'elasticmapreduce'|'ec2'|'appstream'|'dynamodb'|'rds'|'sagemaker'|'custom-resource'|'comprehend'|'lambda'|'cassandra'|'kafka'|'elasticache'|'neptune'|'workspaces',
     *     ResourceIds?: list<string>,
     *     ScalableDimension?: 'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'elasticmapreduce:instancegroup:InstanceCount'|'appstream:fleet:DesiredCapacity'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits'|'rds:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredInstanceCount'|'custom-resource:ResourceType:Property'|'comprehend:document-classifier-endpoint:DesiredInferenceUnits'|'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'|'lambda:function:ProvisionedConcurrency'|'cassandra:table:ReadCapacityUnits'|'cassandra:table:WriteCapacityUnits'|'kafka:broker-storage:VolumeSize'|'elasticache:replication-group:NodeGroups'|'elasticache:replication-group:Replicas'|'neptune:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredProvisionedConcurrency'|'sagemaker:inference-component:DesiredCopyCount'|'workspaces:workspacespool:DesiredUserSessions',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
