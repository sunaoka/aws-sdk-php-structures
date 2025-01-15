<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetPushTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AndroidPushNotificationTemplate|null $ADM
 * @property APNSPushNotificationTemplate|null $APNS
 * @property string|null $Arn
 * @property AndroidPushNotificationTemplate|null $Baidu
 * @property string $CreationDate
 * @property DefaultPushNotificationTemplate|null $Default
 * @property string|null $DefaultSubstitutions
 * @property AndroidPushNotificationTemplate|null $GCM
 * @property string $LastModifiedDate
 * @property string|null $RecommenderId
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string|null $Version
 */
class PushNotificationTemplateResponse extends Shape
{
    /**
     * @param array{
     *     ADM?: AndroidPushNotificationTemplate|null,
     *     APNS?: APNSPushNotificationTemplate|null,
     *     Arn?: string|null,
     *     Baidu?: AndroidPushNotificationTemplate|null,
     *     CreationDate: string,
     *     Default?: DefaultPushNotificationTemplate|null,
     *     DefaultSubstitutions?: string|null,
     *     GCM?: AndroidPushNotificationTemplate|null,
     *     LastModifiedDate: string,
     *     RecommenderId?: string|null,
     *     tags?: array<string, string>|null,
     *     TemplateDescription?: string|null,
     *     TemplateName: string,
     *     TemplateType: 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP',
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
