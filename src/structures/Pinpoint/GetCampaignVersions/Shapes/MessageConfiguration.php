<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Message $ADMMessage
 * @property Message $APNSMessage
 * @property Message $BaiduMessage
 * @property CampaignCustomMessage $CustomMessage
 * @property Message $DefaultMessage
 * @property CampaignEmailMessage $EmailMessage
 * @property Message $GCMMessage
 * @property CampaignSmsMessage $SMSMessage
 * @property CampaignInAppMessage $InAppMessage
 */
class MessageConfiguration extends Shape
{
    /**
     * @param array{
     *     ADMMessage?: Message,
     *     APNSMessage?: Message,
     *     BaiduMessage?: Message,
     *     CustomMessage?: CampaignCustomMessage,
     *     DefaultMessage?: Message,
     *     EmailMessage?: CampaignEmailMessage,
     *     GCMMessage?: Message,
     *     SMSMessage?: CampaignSmsMessage,
     *     InAppMessage?: CampaignInAppMessage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
