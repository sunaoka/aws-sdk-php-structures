<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sessionId
 * @property string|null $browserId
 */
class WebNotificationContext extends Shape
{
    /**
     * @param array{
     *     sessionId?: string|null,
     *     browserId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
