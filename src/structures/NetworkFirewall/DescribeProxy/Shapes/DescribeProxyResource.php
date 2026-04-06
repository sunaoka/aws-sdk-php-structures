<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProxyName
 * @property string|null $ProxyArn
 * @property string|null $ProxyConfigurationName
 * @property string|null $ProxyConfigurationArn
 * @property string|null $NatGatewayId
 * @property 'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED'|'ATTACH_FAILED'|'DETACH_FAILED'|null $ProxyState
 * @property 'MODIFYING'|'COMPLETED'|'FAILED'|null $ProxyModifyState
 * @property list<ListenerProperty>|null $ListenerProperties
 * @property TlsInterceptProperties|null $TlsInterceptProperties
 * @property string|null $VpcEndpointServiceName
 * @property string|null $PrivateDNSName
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $DeleteTime
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property string|null $FailureCode
 * @property string|null $FailureMessage
 * @property list<Tag>|null $Tags
 */
class DescribeProxyResource extends Shape
{
    /**
     * @param array{
     *     ProxyName?: string|null,
     *     ProxyArn?: string|null,
     *     ProxyConfigurationName?: string|null,
     *     ProxyConfigurationArn?: string|null,
     *     NatGatewayId?: string|null,
     *     ProxyState?: 'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED'|'ATTACH_FAILED'|'DETACH_FAILED'|null,
     *     ProxyModifyState?: 'MODIFYING'|'COMPLETED'|'FAILED'|null,
     *     ListenerProperties?: list<ListenerProperty>|null,
     *     TlsInterceptProperties?: TlsInterceptProperties|null,
     *     VpcEndpointServiceName?: string|null,
     *     PrivateDNSName?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     DeleteTime?: \Aws\Api\DateTimeResult|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     FailureCode?: string|null,
     *     FailureMessage?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
