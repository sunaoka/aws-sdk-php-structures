<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool|null $Enabled
 * @property list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'|'DELIVERY_DELAY'|'SUBSCRIPTION'> $MatchingEventTypes
 * @property KinesisFirehoseDestination|null $KinesisFirehoseDestination
 * @property CloudWatchDestination|null $CloudWatchDestination
 * @property SnsDestination|null $SnsDestination
 * @property EventBridgeDestination|null $EventBridgeDestination
 * @property PinpointDestination|null $PinpointDestination
 */
class EventDestination extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Enabled?: bool|null,
     *     MatchingEventTypes: list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'|'DELIVERY_DELAY'|'SUBSCRIPTION'>,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination|null,
     *     CloudWatchDestination?: CloudWatchDestination|null,
     *     SnsDestination?: SnsDestination|null,
     *     EventBridgeDestination?: EventBridgeDestination|null,
     *     PinpointDestination?: PinpointDestination|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
