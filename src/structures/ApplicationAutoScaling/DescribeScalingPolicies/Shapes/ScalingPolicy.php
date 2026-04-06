<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyARN
 * @property string $PolicyName
 * @property 'ecs'|'elasticmapreduce'|'ec2'|'appstream'|'dynamodb'|'rds'|'sagemaker'|'custom-resource'|'comprehend'|'lambda'|'cassandra'|'kafka'|'elasticache'|'neptune'|'workspaces' $ServiceNamespace
 * @property string $ResourceId
 * @property 'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'elasticmapreduce:instancegroup:InstanceCount'|'appstream:fleet:DesiredCapacity'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits'|'rds:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredInstanceCount'|'custom-resource:ResourceType:Property'|'comprehend:document-classifier-endpoint:DesiredInferenceUnits'|'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'|'lambda:function:ProvisionedConcurrency'|'cassandra:table:ReadCapacityUnits'|'cassandra:table:WriteCapacityUnits'|'kafka:broker-storage:VolumeSize'|'elasticache:replication-group:NodeGroups'|'elasticache:replication-group:Replicas'|'neptune:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredProvisionedConcurrency'|'sagemaker:inference-component:DesiredCopyCount'|'workspaces:workspacespool:DesiredUserSessions' $ScalableDimension
 * @property 'StepScaling'|'TargetTrackingScaling'|'PredictiveScaling' $PolicyType
 * @property StepScalingPolicyConfiguration|null $StepScalingPolicyConfiguration
 * @property TargetTrackingScalingPolicyConfiguration|null $TargetTrackingScalingPolicyConfiguration
 * @property PredictiveScalingPolicyConfiguration|null $PredictiveScalingPolicyConfiguration
 * @property list<Alarm>|null $Alarms
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class ScalingPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyARN: string,
     *     PolicyName: string,
     *     ServiceNamespace: 'ecs'|'elasticmapreduce'|'ec2'|'appstream'|'dynamodb'|'rds'|'sagemaker'|'custom-resource'|'comprehend'|'lambda'|'cassandra'|'kafka'|'elasticache'|'neptune'|'workspaces',
     *     ResourceId: string,
     *     ScalableDimension: 'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'elasticmapreduce:instancegroup:InstanceCount'|'appstream:fleet:DesiredCapacity'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits'|'rds:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredInstanceCount'|'custom-resource:ResourceType:Property'|'comprehend:document-classifier-endpoint:DesiredInferenceUnits'|'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'|'lambda:function:ProvisionedConcurrency'|'cassandra:table:ReadCapacityUnits'|'cassandra:table:WriteCapacityUnits'|'kafka:broker-storage:VolumeSize'|'elasticache:replication-group:NodeGroups'|'elasticache:replication-group:Replicas'|'neptune:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredProvisionedConcurrency'|'sagemaker:inference-component:DesiredCopyCount'|'workspaces:workspacespool:DesiredUserSessions',
     *     PolicyType: 'StepScaling'|'TargetTrackingScaling'|'PredictiveScaling',
     *     StepScalingPolicyConfiguration?: StepScalingPolicyConfiguration|null,
     *     TargetTrackingScalingPolicyConfiguration?: TargetTrackingScalingPolicyConfiguration|null,
     *     PredictiveScalingPolicyConfiguration?: PredictiveScalingPolicyConfiguration|null,
     *     Alarms?: list<Alarm>|null,
     *     CreationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
