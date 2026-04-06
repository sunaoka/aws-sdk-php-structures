<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStreamingSessionBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $backupId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $launchProfileId
 * @property string|null $ownedBy
 * @property string|null $sessionId
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|'STOP_IN_PROGRESS'|'START_IN_PROGRESS'|'STOPPED'|'STOP_FAILED'|'START_FAILED'|null $state
 * @property 'STREAMING_SESSION_READY'|'STREAMING_SESSION_DELETED'|'STREAMING_SESSION_CREATE_IN_PROGRESS'|'STREAMING_SESSION_DELETE_IN_PROGRESS'|'INTERNAL_ERROR'|'INSUFFICIENT_CAPACITY'|'ACTIVE_DIRECTORY_DOMAIN_JOIN_ERROR'|'NETWORK_CONNECTION_ERROR'|'INITIALIZATION_SCRIPT_ERROR'|'DECRYPT_STREAMING_IMAGE_ERROR'|'NETWORK_INTERFACE_ERROR'|'STREAMING_SESSION_STOPPED'|'STREAMING_SESSION_STARTED'|'STREAMING_SESSION_STOP_IN_PROGRESS'|'STREAMING_SESSION_START_IN_PROGRESS'|'AMI_VALIDATION_ERROR'|null $statusCode
 * @property string|null $statusMessage
 * @property array<string, string>|null $tags
 */
class StreamingSessionBackup extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     backupId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     launchProfileId?: string|null,
     *     ownedBy?: string|null,
     *     sessionId?: string|null,
     *     state?: 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|'STOP_IN_PROGRESS'|'START_IN_PROGRESS'|'STOPPED'|'STOP_FAILED'|'START_FAILED'|null,
     *     statusCode?: 'STREAMING_SESSION_READY'|'STREAMING_SESSION_DELETED'|'STREAMING_SESSION_CREATE_IN_PROGRESS'|'STREAMING_SESSION_DELETE_IN_PROGRESS'|'INTERNAL_ERROR'|'INSUFFICIENT_CAPACITY'|'ACTIVE_DIRECTORY_DOMAIN_JOIN_ERROR'|'NETWORK_CONNECTION_ERROR'|'INITIALIZATION_SCRIPT_ERROR'|'DECRYPT_STREAMING_IMAGE_ERROR'|'NETWORK_INTERFACE_ERROR'|'STREAMING_SESSION_STOPPED'|'STREAMING_SESSION_STARTED'|'STREAMING_SESSION_STOP_IN_PROGRESS'|'STREAMING_SESSION_START_IN_PROGRESS'|'AMI_VALIDATION_ERROR'|null,
     *     statusMessage?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
