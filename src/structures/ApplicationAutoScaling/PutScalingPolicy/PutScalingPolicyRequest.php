<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyName
 * @property 'ecs'|'elasticmapreduce'|'ec2'|'appstream'|'dynamodb'|'rds'|'sagemaker'|'custom-resource'|'comprehend'|'lambda'|'cassandra'|'kafka'|'elasticache'|'neptune'|'workspaces' $ServiceNamespace
 * @property string $ResourceId
 * @property 'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'elasticmapreduce:instancegroup:InstanceCount'|'appstream:fleet:DesiredCapacity'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits'|'rds:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredInstanceCount'|'custom-resource:ResourceType:Property'|'comprehend:document-classifier-endpoint:DesiredInferenceUnits'|'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'|'lambda:function:ProvisionedConcurrency'|'cassandra:table:ReadCapacityUnits'|'cassandra:table:WriteCapacityUnits'|'kafka:broker-storage:VolumeSize'|'elasticache:replication-group:NodeGroups'|'elasticache:replication-group:Replicas'|'neptune:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredProvisionedConcurrency'|'sagemaker:inference-component:DesiredCopyCount'|'workspaces:workspacespool:DesiredUserSessions' $ScalableDimension
 * @property 'StepScaling'|'TargetTrackingScaling'|'PredictiveScaling' $PolicyType
 * @property Shapes\StepScalingPolicyConfiguration $StepScalingPolicyConfiguration
 * @property Shapes\TargetTrackingScalingPolicyConfiguration $TargetTrackingScalingPolicyConfiguration
 * @property Shapes\PredictiveScalingPolicyConfiguration $PredictiveScalingPolicyConfiguration
 */
class PutScalingPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyName: string,
     *     ServiceNamespace: 'ecs'|'elasticmapreduce'|'ec2'|'appstream'|'dynamodb'|'rds'|'sagemaker'|'custom-resource'|'comprehend'|'lambda'|'cassandra'|'kafka'|'elasticache'|'neptune'|'workspaces',
     *     ResourceId: string,
     *     ScalableDimension: 'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'elasticmapreduce:instancegroup:InstanceCount'|'appstream:fleet:DesiredCapacity'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits'|'rds:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredInstanceCount'|'custom-resource:ResourceType:Property'|'comprehend:document-classifier-endpoint:DesiredInferenceUnits'|'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'|'lambda:function:ProvisionedConcurrency'|'cassandra:table:ReadCapacityUnits'|'cassandra:table:WriteCapacityUnits'|'kafka:broker-storage:VolumeSize'|'elasticache:replication-group:NodeGroups'|'elasticache:replication-group:Replicas'|'neptune:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredProvisionedConcurrency'|'sagemaker:inference-component:DesiredCopyCount'|'workspaces:workspacespool:DesiredUserSessions',
     *     PolicyType?: 'StepScaling'|'TargetTrackingScaling'|'PredictiveScaling',
     *     StepScalingPolicyConfiguration?: Shapes\StepScalingPolicyConfiguration,
     *     TargetTrackingScalingPolicyConfiguration?: Shapes\TargetTrackingScalingPolicyConfiguration,
     *     PredictiveScalingPolicyConfiguration?: Shapes\PredictiveScalingPolicyConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
