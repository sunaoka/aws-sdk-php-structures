<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetParticipant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $participantId
 * @property string $userId
 * @property 'CONNECTED'|'DISCONNECTED' $state
 * @property \Aws\Api\DateTimeResult $firstJoinTime
 * @property array<string, string> $attributes
 * @property bool $published
 * @property string $ispName
 * @property string $osName
 * @property string $osVersion
 * @property string $browserName
 * @property string $browserVersion
 * @property string $sdkVersion
 * @property string $recordingS3BucketName
 * @property string $recordingS3Prefix
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|'DISABLED' $recordingState
 * @property 'UNKNOWN'|'WHIP'|'RTMP'|'RTMPS' $protocol
 */
class Participant extends Shape
{
    /**
     * @param array{
     *     participantId?: string,
     *     userId?: string,
     *     state?: 'CONNECTED'|'DISCONNECTED',
     *     firstJoinTime?: \Aws\Api\DateTimeResult,
     *     attributes?: array<string, string>,
     *     published?: bool,
     *     ispName?: string,
     *     osName?: string,
     *     osVersion?: string,
     *     browserName?: string,
     *     browserVersion?: string,
     *     sdkVersion?: string,
     *     recordingS3BucketName?: string,
     *     recordingS3Prefix?: string,
     *     recordingState?: 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|'DISABLED',
     *     protocol?: 'UNKNOWN'|'WHIP'|'RTMP'|'RTMPS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
