<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TelephonyChannelSubtypeParameters $telephony
 * @property SmsChannelSubtypeParameters $sms
 * @property EmailChannelSubtypeParameters $email
 */
class ChannelSubtypeParameters extends Shape
{
    /**
     * @param array{
     *     telephony?: TelephonyChannelSubtypeParameters,
     *     sms?: SmsChannelSubtypeParameters,
     *     email?: EmailChannelSubtypeParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
