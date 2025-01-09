<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeliveryUri
 * @property list<'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP'> $EndpointTypes
 * @property JourneyCustomMessage $MessageConfig
 * @property string $NextActivity
 * @property string $TemplateName
 * @property string $TemplateVersion
 */
class CustomMessageActivity extends Shape
{
    /**
     * @param array{
     *     DeliveryUri?: string,
     *     EndpointTypes?: list<'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP'>,
     *     MessageConfig?: JourneyCustomMessage,
     *     NextActivity?: string,
     *     TemplateName?: string,
     *     TemplateVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
