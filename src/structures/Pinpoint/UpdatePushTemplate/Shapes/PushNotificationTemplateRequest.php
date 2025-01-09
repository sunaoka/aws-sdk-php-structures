<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdatePushTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AndroidPushNotificationTemplate $ADM
 * @property APNSPushNotificationTemplate $APNS
 * @property AndroidPushNotificationTemplate $Baidu
 * @property DefaultPushNotificationTemplate $Default
 * @property string $DefaultSubstitutions
 * @property AndroidPushNotificationTemplate $GCM
 * @property string $RecommenderId
 * @property array<string, string> $tags
 * @property string $TemplateDescription
 */
class PushNotificationTemplateRequest extends Shape
{
    /**
     * @param array{
     *     ADM?: AndroidPushNotificationTemplate,
     *     APNS?: APNSPushNotificationTemplate,
     *     Baidu?: AndroidPushNotificationTemplate,
     *     Default?: DefaultPushNotificationTemplate,
     *     DefaultSubstitutions?: string,
     *     GCM?: AndroidPushNotificationTemplate,
     *     RecommenderId?: string,
     *     tags?: array<string, string>,
     *     TemplateDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
