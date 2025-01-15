<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsDestination|null $CloudWatchLogsDestination
 * @property bool|null $Enabled
 * @property KinesisFirehoseDestination|null $KinesisFirehoseDestination
 * @property list<'INITIATED_CALL'|'RINGING'|'ANSWERED'|'COMPLETED_CALL'|'BUSY'|'FAILED'|'NO_ANSWER'>|null $MatchingEventTypes
 * @property string|null $Name
 * @property SnsDestination|null $SnsDestination
 */
class EventDestination extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsDestination?: CloudWatchLogsDestination|null,
     *     Enabled?: bool|null,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination|null,
     *     MatchingEventTypes?: list<'INITIATED_CALL'|'RINGING'|'ANSWERED'|'COMPLETED_CALL'|'BUSY'|'FAILED'|'NO_ANSWER'>|null,
     *     Name?: string|null,
     *     SnsDestination?: SnsDestination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
