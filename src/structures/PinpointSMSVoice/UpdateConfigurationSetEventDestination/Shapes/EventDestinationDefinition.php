<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\UpdateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsDestination|null $CloudWatchLogsDestination
 * @property bool|null $Enabled
 * @property KinesisFirehoseDestination|null $KinesisFirehoseDestination
 * @property list<'INITIATED_CALL'|'RINGING'|'ANSWERED'|'COMPLETED_CALL'|'BUSY'|'FAILED'|'NO_ANSWER'>|null $MatchingEventTypes
 * @property SnsDestination|null $SnsDestination
 */
class EventDestinationDefinition extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsDestination?: CloudWatchLogsDestination|null,
     *     Enabled?: bool|null,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination|null,
     *     MatchingEventTypes?: list<'INITIATED_CALL'|'RINGING'|'ANSWERED'|'COMPLETED_CALL'|'BUSY'|'FAILED'|'NO_ANSWER'>|null,
     *     SnsDestination?: SnsDestination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
