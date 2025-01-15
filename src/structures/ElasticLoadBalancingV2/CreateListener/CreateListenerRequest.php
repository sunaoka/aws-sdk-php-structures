<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|null $Protocol
 * @property int<1, 65535>|null $Port
 * @property string|null $SslPolicy
 * @property list<Shapes\Certificate>|null $Certificates
 * @property list<Shapes\Action> $DefaultActions
 * @property list<string>|null $AlpnPolicy
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\MutualAuthenticationAttributes|null $MutualAuthentication
 */
class CreateListenerRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     Protocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|null,
     *     Port?: int<1, 65535>|null,
     *     SslPolicy?: string|null,
     *     Certificates?: list<Shapes\Certificate>|null,
     *     DefaultActions: list<Shapes\Action>,
     *     AlpnPolicy?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     MutualAuthentication?: Shapes\MutualAuthenticationAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
