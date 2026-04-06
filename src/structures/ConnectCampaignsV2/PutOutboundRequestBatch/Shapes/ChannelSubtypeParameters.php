<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TelephonyChannelSubtypeParameters|null $telephony
 * @property SmsChannelSubtypeParameters|null $sms
 * @property EmailChannelSubtypeParameters|null $email
 * @property WhatsAppChannelSubtypeParameters|null $whatsApp
 */
class ChannelSubtypeParameters extends Shape
{
    /**
     * @param array{
     *     telephony?: TelephonyChannelSubtypeParameters|null,
     *     sms?: SmsChannelSubtypeParameters|null,
     *     email?: EmailChannelSubtypeParameters|null,
     *     whatsApp?: WhatsAppChannelSubtypeParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
