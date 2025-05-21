<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamSessionsByAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationArn
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property ExportFilesMetadata|null $ExportFilesMetadata
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $Location
 * @property 'WebRTC'|null $Protocol
 * @property 'ACTIVATING'|'ACTIVE'|'CONNECTED'|'PENDING_CLIENT_RECONNECTION'|'RECONNECTING'|'TERMINATING'|'TERMINATED'|'ERROR'|null $Status
 * @property string|null $UserId
 */
class StreamSessionSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationArn?: string|null,
     *     Arn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ExportFilesMetadata?: ExportFilesMetadata|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Location?: string|null,
     *     Protocol?: 'WebRTC'|null,
     *     Status?: 'ACTIVATING'|'ACTIVE'|'CONNECTED'|'PENDING_CLIENT_RECONNECTION'|'RECONNECTING'|'TERMINATING'|'TERMINATED'|'ERROR'|null,
     *     UserId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
