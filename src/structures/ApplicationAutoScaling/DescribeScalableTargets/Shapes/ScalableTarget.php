<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalableTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ecs'|'elasticmapreduce'|'ec2'|'appstream'|'dynamodb'|'rds'|'sagemaker'|'custom-resource'|'comprehend'|'lambda'|'cassandra'|'kafka'|'elasticache'|'neptune'|'workspaces' $ServiceNamespace
 * @property string $ResourceId
 * @property 'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'elasticmapreduce:instancegroup:InstanceCount'|'appstream:fleet:DesiredCapacity'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits'|'rds:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredInstanceCount'|'custom-resource:ResourceType:Property'|'comprehend:document-classifier-endpoint:DesiredInferenceUnits'|'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'|'lambda:function:ProvisionedConcurrency'|'cassandra:table:ReadCapacityUnits'|'cassandra:table:WriteCapacityUnits'|'kafka:broker-storage:VolumeSize'|'elasticache:replication-group:NodeGroups'|'elasticache:replication-group:Replicas'|'neptune:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredProvisionedConcurrency'|'sagemaker:inference-component:DesiredCopyCount'|'workspaces:workspacespool:DesiredUserSessions' $ScalableDimension
 * @property int $MinCapacity
 * @property int $MaxCapacity
 * @property int $PredictedCapacity
 * @property string $RoleARN
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property SuspendedState $SuspendedState
 * @property string $ScalableTargetARN
 */
class ScalableTarget extends Shape
{
    /**
     * @param array{
     *     ServiceNamespace: 'ecs'|'elasticmapreduce'|'ec2'|'appstream'|'dynamodb'|'rds'|'sagemaker'|'custom-resource'|'comprehend'|'lambda'|'cassandra'|'kafka'|'elasticache'|'neptune'|'workspaces',
     *     ResourceId: string,
     *     ScalableDimension: 'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'elasticmapreduce:instancegroup:InstanceCount'|'appstream:fleet:DesiredCapacity'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits'|'rds:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredInstanceCount'|'custom-resource:ResourceType:Property'|'comprehend:document-classifier-endpoint:DesiredInferenceUnits'|'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'|'lambda:function:ProvisionedConcurrency'|'cassandra:table:ReadCapacityUnits'|'cassandra:table:WriteCapacityUnits'|'kafka:broker-storage:VolumeSize'|'elasticache:replication-group:NodeGroups'|'elasticache:replication-group:Replicas'|'neptune:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredProvisionedConcurrency'|'sagemaker:inference-component:DesiredCopyCount'|'workspaces:workspacespool:DesiredUserSessions',
     *     MinCapacity: int,
     *     MaxCapacity: int,
     *     PredictedCapacity?: int,
     *     RoleARN: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     SuspendedState?: SuspendedState,
     *     ScalableTargetARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
