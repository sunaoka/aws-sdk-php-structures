<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool $Enabled
 * @property list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'|'DELIVERY_DELAY'|'SUBSCRIPTION'> $MatchingEventTypes
 * @property KinesisFirehoseDestination $KinesisFirehoseDestination
 * @property CloudWatchDestination $CloudWatchDestination
 * @property SnsDestination $SnsDestination
 * @property EventBridgeDestination $EventBridgeDestination
 * @property PinpointDestination $PinpointDestination
 */
class EventDestination extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Enabled?: bool,
     *     MatchingEventTypes: list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'|'DELIVERY_DELAY'|'SUBSCRIPTION'>,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination,
     *     CloudWatchDestination?: CloudWatchDestination,
     *     SnsDestination?: SnsDestination,
     *     EventBridgeDestination?: EventBridgeDestination,
     *     PinpointDestination?: PinpointDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
