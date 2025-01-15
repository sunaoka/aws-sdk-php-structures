<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListeners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ListenerArn
 * @property string|null $LoadBalancerArn
 * @property int<1, 65535>|null $Port
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|null $Protocol
 * @property list<Certificate>|null $Certificates
 * @property string|null $SslPolicy
 * @property list<Action>|null $DefaultActions
 * @property list<string>|null $AlpnPolicy
 * @property MutualAuthenticationAttributes|null $MutualAuthentication
 */
class Listener extends Shape
{
    /**
     * @param array{
     *     ListenerArn?: string|null,
     *     LoadBalancerArn?: string|null,
     *     Port?: int<1, 65535>|null,
     *     Protocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|null,
     *     Certificates?: list<Certificate>|null,
     *     SslPolicy?: string|null,
     *     DefaultActions?: list<Action>|null,
     *     AlpnPolicy?: list<string>|null,
     *     MutualAuthentication?: MutualAuthenticationAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
