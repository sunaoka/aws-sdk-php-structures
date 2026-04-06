<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSUFFICIENT_CAPABILITIES'|'QUOTA_EXCEEDED'|'PUBLISHER_NOT_FOUND'|null $errorCode
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property 'JOINED'|'LEFT'|'PUBLISH_STARTED'|'PUBLISH_STOPPED'|'SUBSCRIBE_STARTED'|'SUBSCRIBE_STOPPED'|'PUBLISH_ERROR'|'SUBSCRIBE_ERROR'|'JOIN_ERROR'|null $name
 * @property string|null $participantId
 * @property string|null $remoteParticipantId
 */
class Event extends Shape
{
    /**
     * @param array{
     *     errorCode?: 'INSUFFICIENT_CAPABILITIES'|'QUOTA_EXCEEDED'|'PUBLISHER_NOT_FOUND'|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     name?: 'JOINED'|'LEFT'|'PUBLISH_STARTED'|'PUBLISH_STOPPED'|'SUBSCRIBE_STARTED'|'SUBSCRIBE_STOPPED'|'PUBLISH_ERROR'|'SUBSCRIBE_ERROR'|'JOIN_ERROR'|null,
     *     participantId?: string|null,
     *     remoteParticipantId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
