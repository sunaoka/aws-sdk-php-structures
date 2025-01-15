<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeliveryUri
 * @property list<'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP'>|null $EndpointTypes
 * @property JourneyCustomMessage|null $MessageConfig
 * @property string|null $NextActivity
 * @property string|null $TemplateName
 * @property string|null $TemplateVersion
 */
class CustomMessageActivity extends Shape
{
    /**
     * @param array{
     *     DeliveryUri?: string|null,
     *     EndpointTypes?: list<'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP'>|null,
     *     MessageConfig?: JourneyCustomMessage|null,
     *     NextActivity?: string|null,
     *     TemplateName?: string|null,
     *     TemplateVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
