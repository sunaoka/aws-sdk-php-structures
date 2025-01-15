<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $capacity
 * @property string|null $connectQueueId
 * @property TelephonyOutboundMode $outboundMode
 * @property TelephonyOutboundConfig $defaultOutboundConfig
 */
class TelephonyChannelSubtypeConfig extends Shape
{
    /**
     * @param array{
     *     capacity?: double|null,
     *     connectQueueId?: string|null,
     *     outboundMode: TelephonyOutboundMode,
     *     defaultOutboundConfig: TelephonyOutboundConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
