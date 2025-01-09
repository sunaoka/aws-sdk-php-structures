<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsDestination $CloudWatchLogsDestination
 * @property bool $Enabled
 * @property KinesisFirehoseDestination $KinesisFirehoseDestination
 * @property list<'INITIATED_CALL'|'RINGING'|'ANSWERED'|'COMPLETED_CALL'|'BUSY'|'FAILED'|'NO_ANSWER'> $MatchingEventTypes
 * @property string $Name
 * @property SnsDestination $SnsDestination
 */
class EventDestination extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsDestination?: CloudWatchLogsDestination,
     *     Enabled?: bool,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination,
     *     MatchingEventTypes?: list<'INITIATED_CALL'|'RINGING'|'ANSWERED'|'COMPLETED_CALL'|'BUSY'|'FAILED'|'NO_ANSWER'>,
     *     Name?: string,
     *     SnsDestination?: SnsDestination
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
