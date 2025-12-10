<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JOINED'|'LEFT'|'PUBLISH_STARTED'|'PUBLISH_STOPPED'|'SUBSCRIBE_STARTED'|'SUBSCRIBE_STOPPED'|'PUBLISH_ERROR'|'SUBSCRIBE_ERROR'|'JOIN_ERROR'|'REPLICATION_STARTED'|'REPLICATION_STOPPED'|'TOKEN_EXCHANGED'|null $name
 * @property string|null $participantId
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $remoteParticipantId
 * @property 'INSUFFICIENT_CAPABILITIES'|'QUOTA_EXCEEDED'|'PUBLISHER_NOT_FOUND'|'BITRATE_EXCEEDED'|'RESOLUTION_EXCEEDED'|'STREAM_DURATION_EXCEEDED'|'INVALID_AUDIO_CODEC'|'INVALID_VIDEO_CODEC'|'INVALID_PROTOCOL'|'INVALID_STREAM_KEY'|'REUSE_OF_STREAM_KEY'|'B_FRAME_PRESENT'|'INVALID_INPUT'|'INTERNAL_SERVER_EXCEPTION'|null $errorCode
 * @property string|null $destinationStageArn
 * @property string|null $destinationSessionId
 * @property bool|null $replica
 * @property ExchangedParticipantToken|null $previousToken
 * @property ExchangedParticipantToken|null $newToken
 */
class Event extends Shape
{
    /**
     * @param array{
     *     name?: 'JOINED'|'LEFT'|'PUBLISH_STARTED'|'PUBLISH_STOPPED'|'SUBSCRIBE_STARTED'|'SUBSCRIBE_STOPPED'|'PUBLISH_ERROR'|'SUBSCRIBE_ERROR'|'JOIN_ERROR'|'REPLICATION_STARTED'|'REPLICATION_STOPPED'|'TOKEN_EXCHANGED'|null,
     *     participantId?: string|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     remoteParticipantId?: string|null,
     *     errorCode?: 'INSUFFICIENT_CAPABILITIES'|'QUOTA_EXCEEDED'|'PUBLISHER_NOT_FOUND'|'BITRATE_EXCEEDED'|'RESOLUTION_EXCEEDED'|'STREAM_DURATION_EXCEEDED'|'INVALID_AUDIO_CODEC'|'INVALID_VIDEO_CODEC'|'INVALID_PROTOCOL'|'INVALID_STREAM_KEY'|'REUSE_OF_STREAM_KEY'|'B_FRAME_PRESENT'|'INVALID_INPUT'|'INTERNAL_SERVER_EXCEPTION'|null,
     *     destinationStageArn?: string|null,
     *     destinationSessionId?: string|null,
     *     replica?: bool|null,
     *     previousToken?: ExchangedParticipantToken|null,
     *     newToken?: ExchangedParticipantToken|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
