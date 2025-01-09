<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ListenerArn
 * @property string $LoadBalancerArn
 * @property int $Port
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE' $Protocol
 * @property list<Certificate> $Certificates
 * @property string $SslPolicy
 * @property list<Action> $DefaultActions
 * @property list<string> $AlpnPolicy
 * @property MutualAuthenticationAttributes $MutualAuthentication
 */
class Listener extends Shape
{
    /**
     * @param array{
     *     ListenerArn?: string,
     *     LoadBalancerArn?: string,
     *     Port?: int,
     *     Protocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE',
     *     Certificates?: list<Certificate>,
     *     SslPolicy?: string,
     *     DefaultActions?: list<Action>,
     *     AlpnPolicy?: list<string>,
     *     MutualAuthentication?: MutualAuthenticationAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
