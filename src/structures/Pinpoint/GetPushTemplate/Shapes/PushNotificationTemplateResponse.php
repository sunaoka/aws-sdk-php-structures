<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetPushTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AndroidPushNotificationTemplate $ADM
 * @property APNSPushNotificationTemplate $APNS
 * @property string $Arn
 * @property AndroidPushNotificationTemplate $Baidu
 * @property string $CreationDate
 * @property DefaultPushNotificationTemplate $Default
 * @property string $DefaultSubstitutions
 * @property AndroidPushNotificationTemplate $GCM
 * @property string $LastModifiedDate
 * @property string $RecommenderId
 * @property array<string, string> $tags
 * @property string $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string $Version
 */
class PushNotificationTemplateResponse extends Shape
{
    /**
     * @param array{
     *     ADM?: AndroidPushNotificationTemplate,
     *     APNS?: APNSPushNotificationTemplate,
     *     Arn?: string,
     *     Baidu?: AndroidPushNotificationTemplate,
     *     CreationDate: string,
     *     Default?: DefaultPushNotificationTemplate,
     *     DefaultSubstitutions?: string,
     *     GCM?: AndroidPushNotificationTemplate,
     *     LastModifiedDate: string,
     *     RecommenderId?: string,
     *     tags?: array<string, string>,
     *     TemplateDescription?: string,
     *     TemplateName: string,
     *     TemplateType: 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP',
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
