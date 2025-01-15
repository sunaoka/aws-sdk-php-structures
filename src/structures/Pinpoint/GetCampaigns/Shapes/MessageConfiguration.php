<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Message|null $ADMMessage
 * @property Message|null $APNSMessage
 * @property Message|null $BaiduMessage
 * @property CampaignCustomMessage|null $CustomMessage
 * @property Message|null $DefaultMessage
 * @property CampaignEmailMessage|null $EmailMessage
 * @property Message|null $GCMMessage
 * @property CampaignSmsMessage|null $SMSMessage
 * @property CampaignInAppMessage|null $InAppMessage
 */
class MessageConfiguration extends Shape
{
    /**
     * @param array{
     *     ADMMessage?: Message|null,
     *     APNSMessage?: Message|null,
     *     BaiduMessage?: Message|null,
     *     CustomMessage?: CampaignCustomMessage|null,
     *     DefaultMessage?: Message|null,
     *     EmailMessage?: CampaignEmailMessage|null,
     *     GCMMessage?: Message|null,
     *     SMSMessage?: CampaignSmsMessage|null,
     *     InAppMessage?: CampaignInAppMessage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
