<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string $QueueArn
 * @property list<'s3:ReducedRedundancyLostObject'|'s3:ObjectCreated:*'|'s3:ObjectCreated:Put'|'s3:ObjectCreated:Post'|'s3:ObjectCreated:Copy'|'s3:ObjectCreated:CompleteMultipartUpload'|'s3:ObjectRemoved:*'|'s3:ObjectRemoved:Delete'|'s3:ObjectRemoved:DeleteMarkerCreated'|'s3:ObjectRestore:*'|'s3:ObjectRestore:Post'|'s3:ObjectRestore:Completed'|'s3:Replication:*'|'s3:Replication:OperationFailedReplication'|'s3:Replication:OperationNotTracked'|'s3:Replication:OperationMissedThreshold'|'s3:Replication:OperationReplicatedAfterThreshold'|'s3:ObjectRestore:Delete'|'s3:LifecycleTransition'|'s3:IntelligentTiering'|'s3:ObjectAcl:Put'|'s3:LifecycleExpiration:*'|'s3:LifecycleExpiration:Delete'|'s3:LifecycleExpiration:DeleteMarkerCreated'|'s3:ObjectTagging:*'|'s3:ObjectTagging:Put'|'s3:ObjectTagging:Delete'> $Events
 * @property NotificationConfigurationFilter|null $Filter
 */
class QueueConfiguration extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     QueueArn: string,
     *     Events: list<'s3:ReducedRedundancyLostObject'|'s3:ObjectCreated:*'|'s3:ObjectCreated:Put'|'s3:ObjectCreated:Post'|'s3:ObjectCreated:Copy'|'s3:ObjectCreated:CompleteMultipartUpload'|'s3:ObjectRemoved:*'|'s3:ObjectRemoved:Delete'|'s3:ObjectRemoved:DeleteMarkerCreated'|'s3:ObjectRestore:*'|'s3:ObjectRestore:Post'|'s3:ObjectRestore:Completed'|'s3:Replication:*'|'s3:Replication:OperationFailedReplication'|'s3:Replication:OperationNotTracked'|'s3:Replication:OperationMissedThreshold'|'s3:Replication:OperationReplicatedAfterThreshold'|'s3:ObjectRestore:Delete'|'s3:LifecycleTransition'|'s3:IntelligentTiering'|'s3:ObjectAcl:Put'|'s3:LifecycleExpiration:*'|'s3:LifecycleExpiration:Delete'|'s3:LifecycleExpiration:DeleteMarkerCreated'|'s3:ObjectTagging:*'|'s3:ObjectTagging:Put'|'s3:ObjectTagging:Delete'>,
     *     Filter?: NotificationConfigurationFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
