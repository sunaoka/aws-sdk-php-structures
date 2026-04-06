<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\StopStreamingSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'DEACTIVATED'|'ACTIVATED'|null $automaticTerminationMode
 * @property 'AUTOMATIC'|'DEACTIVATED'|null $backupMode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $ec2InstanceType
 * @property string|null $launchProfileId
 * @property int<0, 10>|null $maxBackupsToRetain
 * @property string|null $ownedBy
 * @property string|null $sessionId
 * @property 'DEACTIVATED'|'ACTIVATED'|null $sessionPersistenceMode
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property string|null $startedBy
 * @property string|null $startedFromBackupId
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|'STOP_IN_PROGRESS'|'START_IN_PROGRESS'|'STOPPED'|'STOP_FAILED'|'START_FAILED'|null $state
 * @property 'STREAMING_SESSION_READY'|'STREAMING_SESSION_DELETED'|'STREAMING_SESSION_CREATE_IN_PROGRESS'|'STREAMING_SESSION_DELETE_IN_PROGRESS'|'INTERNAL_ERROR'|'INSUFFICIENT_CAPACITY'|'ACTIVE_DIRECTORY_DOMAIN_JOIN_ERROR'|'NETWORK_CONNECTION_ERROR'|'INITIALIZATION_SCRIPT_ERROR'|'DECRYPT_STREAMING_IMAGE_ERROR'|'NETWORK_INTERFACE_ERROR'|'STREAMING_SESSION_STOPPED'|'STREAMING_SESSION_STARTED'|'STREAMING_SESSION_STOP_IN_PROGRESS'|'STREAMING_SESSION_START_IN_PROGRESS'|'AMI_VALIDATION_ERROR'|null $statusCode
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult|null $stopAt
 * @property \Aws\Api\DateTimeResult|null $stoppedAt
 * @property string|null $stoppedBy
 * @property string|null $streamingImageId
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $terminateAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property VolumeConfiguration|null $volumeConfiguration
 * @property 'RETAIN'|'DELETE'|null $volumeRetentionMode
 */
class StreamingSession extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     automaticTerminationMode?: 'DEACTIVATED'|'ACTIVATED'|null,
     *     backupMode?: 'AUTOMATIC'|'DEACTIVATED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     ec2InstanceType?: string|null,
     *     launchProfileId?: string|null,
     *     maxBackupsToRetain?: int<0, 10>|null,
     *     ownedBy?: string|null,
     *     sessionId?: string|null,
     *     sessionPersistenceMode?: 'DEACTIVATED'|'ACTIVATED'|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     startedBy?: string|null,
     *     startedFromBackupId?: string|null,
     *     state?: 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|'STOP_IN_PROGRESS'|'START_IN_PROGRESS'|'STOPPED'|'STOP_FAILED'|'START_FAILED'|null,
     *     statusCode?: 'STREAMING_SESSION_READY'|'STREAMING_SESSION_DELETED'|'STREAMING_SESSION_CREATE_IN_PROGRESS'|'STREAMING_SESSION_DELETE_IN_PROGRESS'|'INTERNAL_ERROR'|'INSUFFICIENT_CAPACITY'|'ACTIVE_DIRECTORY_DOMAIN_JOIN_ERROR'|'NETWORK_CONNECTION_ERROR'|'INITIALIZATION_SCRIPT_ERROR'|'DECRYPT_STREAMING_IMAGE_ERROR'|'NETWORK_INTERFACE_ERROR'|'STREAMING_SESSION_STOPPED'|'STREAMING_SESSION_STARTED'|'STREAMING_SESSION_STOP_IN_PROGRESS'|'STREAMING_SESSION_START_IN_PROGRESS'|'AMI_VALIDATION_ERROR'|null,
     *     statusMessage?: string|null,
     *     stopAt?: \Aws\Api\DateTimeResult|null,
     *     stoppedAt?: \Aws\Api\DateTimeResult|null,
     *     stoppedBy?: string|null,
     *     streamingImageId?: string|null,
     *     tags?: array<string, string>|null,
     *     terminateAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     volumeConfiguration?: VolumeConfiguration|null,
     *     volumeRetentionMode?: 'RETAIN'|'DELETE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
