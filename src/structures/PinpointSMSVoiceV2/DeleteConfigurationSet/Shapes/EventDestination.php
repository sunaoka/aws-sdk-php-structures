<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventDestinationName
 * @property bool $Enabled
 * @property list<'ALL'|'TEXT_ALL'|'TEXT_SENT'|'TEXT_PENDING'|'TEXT_QUEUED'|'TEXT_SUCCESSFUL'|'TEXT_DELIVERED'|'TEXT_INVALID'|'TEXT_INVALID_MESSAGE'|'TEXT_UNREACHABLE'|'TEXT_CARRIER_UNREACHABLE'|'TEXT_BLOCKED'|'TEXT_CARRIER_BLOCKED'|'TEXT_SPAM'|'TEXT_UNKNOWN'|'TEXT_TTL_EXPIRED'|'VOICE_ALL'|'VOICE_INITIATED'|'VOICE_RINGING'|'VOICE_ANSWERED'|'VOICE_COMPLETED'|'VOICE_BUSY'|'VOICE_NO_ANSWER'|'VOICE_FAILED'|'VOICE_TTL_EXPIRED'> $MatchingEventTypes
 * @property CloudWatchLogsDestination|null $CloudWatchLogsDestination
 * @property KinesisFirehoseDestination|null $KinesisFirehoseDestination
 * @property SnsDestination|null $SnsDestination
 */
class EventDestination extends Shape
{
    /**
     * @param array{
     *     EventDestinationName: string,
     *     Enabled: bool,
     *     MatchingEventTypes: list<'ALL'|'TEXT_ALL'|'TEXT_SENT'|'TEXT_PENDING'|'TEXT_QUEUED'|'TEXT_SUCCESSFUL'|'TEXT_DELIVERED'|'TEXT_INVALID'|'TEXT_INVALID_MESSAGE'|'TEXT_UNREACHABLE'|'TEXT_CARRIER_UNREACHABLE'|'TEXT_BLOCKED'|'TEXT_CARRIER_BLOCKED'|'TEXT_SPAM'|'TEXT_UNKNOWN'|'TEXT_TTL_EXPIRED'|'VOICE_ALL'|'VOICE_INITIATED'|'VOICE_RINGING'|'VOICE_ANSWERED'|'VOICE_COMPLETED'|'VOICE_BUSY'|'VOICE_NO_ANSWER'|'VOICE_FAILED'|'VOICE_TTL_EXPIRED'>,
     *     CloudWatchLogsDestination?: CloudWatchLogsDestination|null,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination|null,
     *     SnsDestination?: SnsDestination|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
