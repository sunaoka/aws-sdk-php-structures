<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetParticipant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $participantId
 * @property string|null $userId
 * @property 'CONNECTED'|'DISCONNECTED'|null $state
 * @property \Aws\Api\DateTimeResult|null $firstJoinTime
 * @property array<string, string>|null $attributes
 * @property bool|null $published
 * @property string|null $ispName
 * @property string|null $osName
 * @property string|null $osVersion
 * @property string|null $browserName
 * @property string|null $browserVersion
 * @property string|null $sdkVersion
 * @property string|null $recordingS3BucketName
 * @property string|null $recordingS3Prefix
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|'DISABLED'|null $recordingState
 * @property 'UNKNOWN'|'WHIP'|'RTMP'|'RTMPS'|null $protocol
 */
class Participant extends Shape
{
    /**
     * @param array{
     *     participantId?: string|null,
     *     userId?: string|null,
     *     state?: 'CONNECTED'|'DISCONNECTED'|null,
     *     firstJoinTime?: \Aws\Api\DateTimeResult|null,
     *     attributes?: array<string, string>|null,
     *     published?: bool|null,
     *     ispName?: string|null,
     *     osName?: string|null,
     *     osVersion?: string|null,
     *     browserName?: string|null,
     *     browserVersion?: string|null,
     *     sdkVersion?: string|null,
     *     recordingS3BucketName?: string|null,
     *     recordingS3Prefix?: string|null,
     *     recordingState?: 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|'DISABLED'|null,
     *     protocol?: 'UNKNOWN'|'WHIP'|'RTMP'|'RTMPS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
