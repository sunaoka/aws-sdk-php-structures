<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeliveryUri
 * @property list<'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP'> $EndpointTypes
 */
class CustomDeliveryConfiguration extends Shape
{
    /**
     * @param array{
     *     DeliveryUri: string,
     *     EndpointTypes?: list<'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
