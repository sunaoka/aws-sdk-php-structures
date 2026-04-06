<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $DeleteTime
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property string|null $FailureCode
 * @property string|null $FailureMessage
 * @property 'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED'|'ATTACH_FAILED'|'DETACH_FAILED'|null $ProxyState
 * @property 'MODIFYING'|'COMPLETED'|'FAILED'|null $ProxyModifyState
 * @property string|null $NatGatewayId
 * @property string|null $ProxyConfigurationName
 * @property string|null $ProxyConfigurationArn
 * @property string|null $ProxyName
 * @property string|null $ProxyArn
 * @property list<ListenerProperty>|null $ListenerProperties
 * @property TlsInterceptProperties|null $TlsInterceptProperties
 * @property list<Tag>|null $Tags
 */
class Proxy extends Shape
{
    /**
     * @param array{
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     DeleteTime?: \Aws\Api\DateTimeResult|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     FailureCode?: string|null,
     *     FailureMessage?: string|null,
     *     ProxyState?: 'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED'|'ATTACH_FAILED'|'DETACH_FAILED'|null,
     *     ProxyModifyState?: 'MODIFYING'|'COMPLETED'|'FAILED'|null,
     *     NatGatewayId?: string|null,
     *     ProxyConfigurationName?: string|null,
     *     ProxyConfigurationArn?: string|null,
     *     ProxyName?: string|null,
     *     ProxyArn?: string|null,
     *     ListenerProperties?: list<ListenerProperty>|null,
     *     TlsInterceptProperties?: TlsInterceptProperties|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
