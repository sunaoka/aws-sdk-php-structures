<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ADMMessage $ADMMessage
 * @property APNSMessage $APNSMessage
 * @property BaiduMessage $BaiduMessage
 * @property DefaultMessage $DefaultMessage
 * @property DefaultPushNotificationMessage $DefaultPushNotificationMessage
 * @property EmailMessage $EmailMessage
 * @property GCMMessage $GCMMessage
 * @property SMSMessage $SMSMessage
 * @property VoiceMessage $VoiceMessage
 */
class DirectMessageConfiguration extends Shape
{
    /**
     * @param array{
     *     ADMMessage?: ADMMessage,
     *     APNSMessage?: APNSMessage,
     *     BaiduMessage?: BaiduMessage,
     *     DefaultMessage?: DefaultMessage,
     *     DefaultPushNotificationMessage?: DefaultPushNotificationMessage,
     *     EmailMessage?: EmailMessage,
     *     GCMMessage?: GCMMessage,
     *     SMSMessage?: SMSMessage,
     *     VoiceMessage?: VoiceMessage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
