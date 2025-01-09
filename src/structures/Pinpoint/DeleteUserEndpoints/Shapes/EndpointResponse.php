<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteUserEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property string $ApplicationId
 * @property array<string, list<string>> $Attributes
 * @property 'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP' $ChannelType
 * @property string $CohortId
 * @property string $CreationDate
 * @property EndpointDemographic $Demographic
 * @property string $EffectiveDate
 * @property string $EndpointStatus
 * @property string $Id
 * @property EndpointLocation $Location
 * @property array<string, double> $Metrics
 * @property string $OptOut
 * @property string $RequestId
 * @property EndpointUser $User
 */
class EndpointResponse extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     ApplicationId?: string,
     *     Attributes?: array<string, list<string>>,
     *     ChannelType?: 'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP',
     *     CohortId?: string,
     *     CreationDate?: string,
     *     Demographic?: EndpointDemographic,
     *     EffectiveDate?: string,
     *     EndpointStatus?: string,
     *     Id?: string,
     *     Location?: EndpointLocation,
     *     Metrics?: array<string, double>,
     *     OptOut?: string,
     *     RequestId?: string,
     *     User?: EndpointUser
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
