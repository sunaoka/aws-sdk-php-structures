<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $capacity
 * @property SmsOutboundMode $outboundMode
 * @property SmsOutboundConfig $defaultOutboundConfig
 */
class SmsChannelSubtypeConfig extends Shape
{
    /**
     * @param array{
     *     capacity?: double,
     *     outboundMode: SmsOutboundMode,
     *     defaultOutboundConfig: SmsOutboundConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
