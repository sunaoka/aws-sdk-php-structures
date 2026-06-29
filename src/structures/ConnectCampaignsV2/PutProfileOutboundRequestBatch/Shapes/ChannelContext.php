<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebNotificationContext|null $webNotificationContext
 */
class ChannelContext extends Shape
{
    /**
     * @param array{webNotificationContext?: WebNotificationContext|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
