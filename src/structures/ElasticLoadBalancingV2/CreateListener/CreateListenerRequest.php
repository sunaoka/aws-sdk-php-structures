<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE' $Protocol
 * @property int<1, 65535> $Port
 * @property string $SslPolicy
 * @property list<Shapes\Certificate> $Certificates
 * @property list<Shapes\Action> $DefaultActions
 * @property list<string> $AlpnPolicy
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\MutualAuthenticationAttributes $MutualAuthentication
 */
class CreateListenerRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     Protocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE',
     *     Port?: int<1, 65535>,
     *     SslPolicy?: string,
     *     Certificates?: list<Shapes\Certificate>,
     *     DefaultActions: list<Shapes\Action>,
     *     AlpnPolicy?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     MutualAuthentication?: Shapes\MutualAuthenticationAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
