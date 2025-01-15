<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ADMMessage|null $ADMMessage
 * @property APNSMessage|null $APNSMessage
 * @property BaiduMessage|null $BaiduMessage
 * @property DefaultMessage|null $DefaultMessage
 * @property DefaultPushNotificationMessage|null $DefaultPushNotificationMessage
 * @property EmailMessage|null $EmailMessage
 * @property GCMMessage|null $GCMMessage
 * @property SMSMessage|null $SMSMessage
 * @property VoiceMessage|null $VoiceMessage
 */
class DirectMessageConfiguration extends Shape
{
    /**
     * @param array{
     *     ADMMessage?: ADMMessage|null,
     *     APNSMessage?: APNSMessage|null,
     *     BaiduMessage?: BaiduMessage|null,
     *     DefaultMessage?: DefaultMessage|null,
     *     DefaultPushNotificationMessage?: DefaultPushNotificationMessage|null,
     *     EmailMessage?: EmailMessage|null,
     *     GCMMessage?: GCMMessage|null,
     *     SMSMessage?: SMSMessage|null,
     *     VoiceMessage?: VoiceMessage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
