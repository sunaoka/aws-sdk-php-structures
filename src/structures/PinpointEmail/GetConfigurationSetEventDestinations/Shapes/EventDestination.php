<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool $Enabled
 * @property list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'> $MatchingEventTypes
 * @property KinesisFirehoseDestination $KinesisFirehoseDestination
 * @property CloudWatchDestination $CloudWatchDestination
 * @property SnsDestination $SnsDestination
 * @property PinpointDestination $PinpointDestination
 */
class EventDestination extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Enabled?: bool,
     *     MatchingEventTypes: list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'>,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination,
     *     CloudWatchDestination?: CloudWatchDestination,
     *     SnsDestination?: SnsDestination,
     *     PinpointDestination?: PinpointDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
