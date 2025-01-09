<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JOINED'|'LEFT'|'PUBLISH_STARTED'|'PUBLISH_STOPPED'|'SUBSCRIBE_STARTED'|'SUBSCRIBE_STOPPED'|'PUBLISH_ERROR'|'SUBSCRIBE_ERROR'|'JOIN_ERROR' $name
 * @property string $participantId
 * @property \Aws\Api\DateTimeResult $eventTime
 * @property string $remoteParticipantId
 * @property 'INSUFFICIENT_CAPABILITIES'|'QUOTA_EXCEEDED'|'PUBLISHER_NOT_FOUND'|'BITRATE_EXCEEDED'|'RESOLUTION_EXCEEDED'|'STREAM_DURATION_EXCEEDED'|'INVALID_AUDIO_CODEC'|'INVALID_VIDEO_CODEC'|'INVALID_PROTOCOL'|'INVALID_STREAM_KEY'|'REUSE_OF_STREAM_KEY'|'B_FRAME_PRESENT'|'INVALID_INPUT'|'INTERNAL_SERVER_EXCEPTION' $errorCode
 */
class Event extends Shape
{
    /**
     * @param array{
     *     name?: 'JOINED'|'LEFT'|'PUBLISH_STARTED'|'PUBLISH_STOPPED'|'SUBSCRIBE_STARTED'|'SUBSCRIBE_STOPPED'|'PUBLISH_ERROR'|'SUBSCRIBE_ERROR'|'JOIN_ERROR',
     *     participantId?: string,
     *     eventTime?: \Aws\Api\DateTimeResult,
     *     remoteParticipantId?: string,
     *     errorCode?: 'INSUFFICIENT_CAPABILITIES'|'QUOTA_EXCEEDED'|'PUBLISHER_NOT_FOUND'|'BITRATE_EXCEEDED'|'RESOLUTION_EXCEEDED'|'STREAM_DURATION_EXCEEDED'|'INVALID_AUDIO_CODEC'|'INVALID_VIDEO_CODEC'|'INVALID_PROTOCOL'|'INVALID_STREAM_KEY'|'REUSE_OF_STREAM_KEY'|'B_FRAME_PRESENT'|'INVALID_INPUT'|'INTERNAL_SERVER_EXCEPTION'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
