<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'> $MatchingEventTypes
 * @property KinesisFirehoseDestination $KinesisFirehoseDestination
 * @property CloudWatchDestination $CloudWatchDestination
 * @property SnsDestination $SnsDestination
 * @property PinpointDestination $PinpointDestination
 */
class EventDestinationDefinition extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     MatchingEventTypes?: list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'>,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination,
     *     CloudWatchDestination?: CloudWatchDestination,
     *     SnsDestination?: SnsDestination,
     *     PinpointDestination?: PinpointDestination
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
