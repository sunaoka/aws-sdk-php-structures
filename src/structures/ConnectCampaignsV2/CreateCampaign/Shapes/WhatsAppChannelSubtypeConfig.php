<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $capacity
 * @property WhatsAppOutboundMode $outboundMode
 * @property WhatsAppOutboundConfig $defaultOutboundConfig
 */
class WhatsAppChannelSubtypeConfig extends Shape
{
    /**
     * @param array{
     *     capacity?: double|null,
     *     outboundMode: WhatsAppOutboundMode,
     *     defaultOutboundConfig: WhatsAppOutboundConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
