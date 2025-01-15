<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JOINED'|'LEFT'|'PUBLISH_STARTED'|'PUBLISH_STOPPED'|'SUBSCRIBE_STARTED'|'SUBSCRIBE_STOPPED'|'PUBLISH_ERROR'|'SUBSCRIBE_ERROR'|'JOIN_ERROR'|null $name
 * @property string|null $participantId
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $remoteParticipantId
 * @property 'INSUFFICIENT_CAPABILITIES'|'QUOTA_EXCEEDED'|'PUBLISHER_NOT_FOUND'|'BITRATE_EXCEEDED'|'RESOLUTION_EXCEEDED'|'STREAM_DURATION_EXCEEDED'|'INVALID_AUDIO_CODEC'|'INVALID_VIDEO_CODEC'|'INVALID_PROTOCOL'|'INVALID_STREAM_KEY'|'REUSE_OF_STREAM_KEY'|'B_FRAME_PRESENT'|'INVALID_INPUT'|'INTERNAL_SERVER_EXCEPTION'|null $errorCode
 */
class Event extends Shape
{
    /**
     * @param array{
     *     name?: 'JOINED'|'LEFT'|'PUBLISH_STARTED'|'PUBLISH_STOPPED'|'SUBSCRIBE_STARTED'|'SUBSCRIBE_STOPPED'|'PUBLISH_ERROR'|'SUBSCRIBE_ERROR'|'JOIN_ERROR'|null,
     *     participantId?: string|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     remoteParticipantId?: string|null,
     *     errorCode?: 'INSUFFICIENT_CAPABILITIES'|'QUOTA_EXCEEDED'|'PUBLISHER_NOT_FOUND'|'BITRATE_EXCEEDED'|'RESOLUTION_EXCEEDED'|'STREAM_DURATION_EXCEEDED'|'INVALID_AUDIO_CODEC'|'INVALID_VIDEO_CODEC'|'INVALID_PROTOCOL'|'INVALID_STREAM_KEY'|'REUSE_OF_STREAM_KEY'|'B_FRAME_PRESENT'|'INVALID_INPUT'|'INTERNAL_SERVER_EXCEPTION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
