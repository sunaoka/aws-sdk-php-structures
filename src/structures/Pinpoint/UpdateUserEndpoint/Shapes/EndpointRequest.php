<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateUserEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property array<string, list<string>>|null $Attributes
 * @property 'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP'|null $ChannelType
 * @property EndpointDemographic|null $Demographic
 * @property string|null $EffectiveDate
 * @property string|null $EndpointStatus
 * @property EndpointLocation|null $Location
 * @property array<string, double>|null $Metrics
 * @property string|null $OptOut
 * @property string|null $RequestId
 * @property EndpointUser|null $User
 */
class EndpointRequest extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     Attributes?: array<string, list<string>>|null,
     *     ChannelType?: 'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP'|null,
     *     Demographic?: EndpointDemographic|null,
     *     EffectiveDate?: string|null,
     *     EndpointStatus?: string|null,
     *     Location?: EndpointLocation|null,
     *     Metrics?: array<string, double>|null,
     *     OptOut?: string|null,
     *     RequestId?: string|null,
     *     User?: EndpointUser|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
