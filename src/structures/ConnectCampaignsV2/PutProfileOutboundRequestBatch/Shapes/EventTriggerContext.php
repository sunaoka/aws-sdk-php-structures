<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceEvent
 * @property ChannelContext|null $channelContext
 */
class EventTriggerContext extends Shape
{
    /**
     * @param array{
     *     sourceEvent?: string|null,
     *     channelContext?: ChannelContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
