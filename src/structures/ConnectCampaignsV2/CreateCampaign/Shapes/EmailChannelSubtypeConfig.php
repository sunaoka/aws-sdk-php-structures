<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $capacity
 * @property EmailOutboundMode $outboundMode
 * @property EmailOutboundConfig $defaultOutboundConfig
 */
class EmailChannelSubtypeConfig extends Shape
{
    /**
     * @param array{
     *     capacity?: double,
     *     outboundMode: EmailOutboundMode,
     *     defaultOutboundConfig: EmailOutboundConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
