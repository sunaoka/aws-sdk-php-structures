<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignChannelSubtypeConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TelephonyChannelSubtypeConfig $telephony
 * @property SmsChannelSubtypeConfig $sms
 * @property EmailChannelSubtypeConfig $email
 */
class ChannelSubtypeConfig extends Shape
{
    /**
     * @param array{
     *     telephony?: TelephonyChannelSubtypeConfig,
     *     sms?: SmsChannelSubtypeConfig,
     *     email?: EmailChannelSubtypeConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
