<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActivityId
 * @property 'ecs'|'elasticmapreduce'|'ec2'|'appstream'|'dynamodb'|'rds'|'sagemaker'|'custom-resource'|'comprehend'|'lambda'|'cassandra'|'kafka'|'elasticache'|'neptune'|'workspaces' $ServiceNamespace
 * @property string $ResourceId
 * @property 'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'elasticmapreduce:instancegroup:InstanceCount'|'appstream:fleet:DesiredCapacity'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits'|'rds:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredInstanceCount'|'custom-resource:ResourceType:Property'|'comprehend:document-classifier-endpoint:DesiredInferenceUnits'|'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'|'lambda:function:ProvisionedConcurrency'|'cassandra:table:ReadCapacityUnits'|'cassandra:table:WriteCapacityUnits'|'kafka:broker-storage:VolumeSize'|'elasticache:replication-group:NodeGroups'|'elasticache:replication-group:Replicas'|'neptune:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredProvisionedConcurrency'|'sagemaker:inference-component:DesiredCopyCount'|'workspaces:workspacespool:DesiredUserSessions' $ScalableDimension
 * @property string $Description
 * @property string $Cause
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'Pending'|'InProgress'|'Successful'|'Overridden'|'Unfulfilled'|'Failed' $StatusCode
 * @property string|null $StatusMessage
 * @property string|null $Details
 * @property list<NotScaledReason>|null $NotScaledReasons
 */
class ScalingActivity extends Shape
{
    /**
     * @param array{
     *     ActivityId: string,
     *     ServiceNamespace: 'ecs'|'elasticmapreduce'|'ec2'|'appstream'|'dynamodb'|'rds'|'sagemaker'|'custom-resource'|'comprehend'|'lambda'|'cassandra'|'kafka'|'elasticache'|'neptune'|'workspaces',
     *     ResourceId: string,
     *     ScalableDimension: 'ecs:service:DesiredCount'|'ec2:spot-fleet-request:TargetCapacity'|'elasticmapreduce:instancegroup:InstanceCount'|'appstream:fleet:DesiredCapacity'|'dynamodb:table:ReadCapacityUnits'|'dynamodb:table:WriteCapacityUnits'|'dynamodb:index:ReadCapacityUnits'|'dynamodb:index:WriteCapacityUnits'|'rds:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredInstanceCount'|'custom-resource:ResourceType:Property'|'comprehend:document-classifier-endpoint:DesiredInferenceUnits'|'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'|'lambda:function:ProvisionedConcurrency'|'cassandra:table:ReadCapacityUnits'|'cassandra:table:WriteCapacityUnits'|'kafka:broker-storage:VolumeSize'|'elasticache:replication-group:NodeGroups'|'elasticache:replication-group:Replicas'|'neptune:cluster:ReadReplicaCount'|'sagemaker:variant:DesiredProvisionedConcurrency'|'sagemaker:inference-component:DesiredCopyCount'|'workspaces:workspacespool:DesiredUserSessions',
     *     Description: string,
     *     Cause: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     StatusCode: 'Pending'|'InProgress'|'Successful'|'Overridden'|'Unfulfilled'|'Failed',
     *     StatusMessage?: string|null,
     *     Details?: string|null,
     *     NotScaledReasons?: list<NotScaledReason>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
