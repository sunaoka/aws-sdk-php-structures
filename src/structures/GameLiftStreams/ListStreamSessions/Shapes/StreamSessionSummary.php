<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $UserId
 * @property 'ACTIVATING'|'ACTIVE'|'CONNECTED'|'PENDING_CLIENT_RECONNECTION'|'RECONNECTING'|'TERMINATING'|'TERMINATED'|'ERROR'|null $Status
 * @property 'internalError'|'invalidSignalRequest'|'placementTimeout'|'applicationLogS3DestinationError'|'applicationExit'|'connectionTimeout'|'reconnectionTimeout'|'maxSessionLengthTimeout'|'idleTimeout'|'apiTerminated'|null $StatusReason
 * @property 'WebRTC'|null $Protocol
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $ApplicationArn
 * @property ExportFilesMetadata|null $ExportFilesMetadata
 * @property string|null $Location
 */
class StreamSessionSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     UserId?: string|null,
     *     Status?: 'ACTIVATING'|'ACTIVE'|'CONNECTED'|'PENDING_CLIENT_RECONNECTION'|'RECONNECTING'|'TERMINATING'|'TERMINATED'|'ERROR'|null,
     *     StatusReason?: 'internalError'|'invalidSignalRequest'|'placementTimeout'|'applicationLogS3DestinationError'|'applicationExit'|'connectionTimeout'|'reconnectionTimeout'|'maxSessionLengthTimeout'|'idleTimeout'|'apiTerminated'|null,
     *     Protocol?: 'WebRTC'|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ApplicationArn?: string|null,
     *     ExportFilesMetadata?: ExportFilesMetadata|null,
     *     Location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
