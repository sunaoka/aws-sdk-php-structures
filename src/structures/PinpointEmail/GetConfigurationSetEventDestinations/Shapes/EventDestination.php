<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool|null $Enabled
 * @property list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'> $MatchingEventTypes
 * @property KinesisFirehoseDestination|null $KinesisFirehoseDestination
 * @property CloudWatchDestination|null $CloudWatchDestination
 * @property SnsDestination|null $SnsDestination
 * @property PinpointDestination|null $PinpointDestination
 */
class EventDestination extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Enabled?: bool|null,
     *     MatchingEventTypes: list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'>,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination|null,
     *     CloudWatchDestination?: CloudWatchDestination|null,
     *     SnsDestination?: SnsDestination|null,
     *     PinpointDestination?: PinpointDestination|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
