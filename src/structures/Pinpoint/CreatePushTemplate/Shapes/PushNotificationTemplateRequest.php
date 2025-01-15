<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreatePushTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AndroidPushNotificationTemplate|null $ADM
 * @property APNSPushNotificationTemplate|null $APNS
 * @property AndroidPushNotificationTemplate|null $Baidu
 * @property DefaultPushNotificationTemplate|null $Default
 * @property string|null $DefaultSubstitutions
 * @property AndroidPushNotificationTemplate|null $GCM
 * @property string|null $RecommenderId
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 */
class PushNotificationTemplateRequest extends Shape
{
    /**
     * @param array{
     *     ADM?: AndroidPushNotificationTemplate|null,
     *     APNS?: APNSPushNotificationTemplate|null,
     *     Baidu?: AndroidPushNotificationTemplate|null,
     *     Default?: DefaultPushNotificationTemplate|null,
     *     DefaultSubstitutions?: string|null,
     *     GCM?: AndroidPushNotificationTemplate|null,
     *     RecommenderId?: string|null,
     *     tags?: array<string, string>|null,
     *     TemplateDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
