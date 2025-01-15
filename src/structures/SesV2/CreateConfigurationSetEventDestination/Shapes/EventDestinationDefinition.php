<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'|'DELIVERY_DELAY'|'SUBSCRIPTION'>|null $MatchingEventTypes
 * @property KinesisFirehoseDestination|null $KinesisFirehoseDestination
 * @property CloudWatchDestination|null $CloudWatchDestination
 * @property SnsDestination|null $SnsDestination
 * @property EventBridgeDestination|null $EventBridgeDestination
 * @property PinpointDestination|null $PinpointDestination
 */
class EventDestinationDefinition extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     MatchingEventTypes?: list<'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'|'DELIVERY_DELAY'|'SUBSCRIPTION'>|null,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination|null,
     *     CloudWatchDestination?: CloudWatchDestination|null,
     *     SnsDestination?: SnsDestination|null,
     *     EventBridgeDestination?: EventBridgeDestination|null,
     *     PinpointDestination?: PinpointDestination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
