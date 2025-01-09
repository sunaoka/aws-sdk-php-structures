<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignChannelSubtypeConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $capacity
 * @property string $connectQueueId
 * @property TelephonyOutboundMode $outboundMode
 * @property TelephonyOutboundConfig $defaultOutboundConfig
 */
class TelephonyChannelSubtypeConfig extends Shape
{
    /**
     * @param array{
     *     capacity?: double,
     *     connectQueueId?: string,
     *     outboundMode: TelephonyOutboundMode,
     *     defaultOutboundConfig: TelephonyOutboundConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
