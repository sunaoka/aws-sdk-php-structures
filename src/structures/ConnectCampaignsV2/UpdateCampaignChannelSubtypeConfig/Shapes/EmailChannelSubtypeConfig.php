<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignChannelSubtypeConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $capacity
 * @property EmailOutboundMode $outboundMode
 * @property EmailOutboundConfig $defaultOutboundConfig
 */
class EmailChannelSubtypeConfig extends Shape
{
    /**
     * @param array{
     *     capacity?: double|null,
     *     outboundMode: EmailOutboundMode,
     *     defaultOutboundConfig: EmailOutboundConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
