<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStreamingSessionStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property string|null $ownedBy
 * @property 'READY'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|null $state
 * @property 'STREAM_CREATE_IN_PROGRESS'|'STREAM_READY'|'STREAM_DELETE_IN_PROGRESS'|'STREAM_DELETED'|'INTERNAL_ERROR'|'NETWORK_CONNECTION_ERROR'|null $statusCode
 * @property string|null $streamId
 * @property string|null $url
 */
class StreamingSessionStream extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     ownedBy?: string|null,
     *     state?: 'READY'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|null,
     *     statusCode?: 'STREAM_CREATE_IN_PROGRESS'|'STREAM_READY'|'STREAM_DELETE_IN_PROGRESS'|'STREAM_DELETED'|'INTERNAL_ERROR'|'NETWORK_CONNECTION_ERROR'|null,
     *     streamId?: string|null,
     *     url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
