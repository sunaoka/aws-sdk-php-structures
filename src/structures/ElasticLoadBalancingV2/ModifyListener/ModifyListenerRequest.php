<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property int<1, 65535>|null $Port
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|null $Protocol
 * @property string|null $SslPolicy
 * @property list<Shapes\Certificate>|null $Certificates
 * @property list<Shapes\Action>|null $DefaultActions
 * @property list<string>|null $AlpnPolicy
 * @property Shapes\MutualAuthenticationAttributes|null $MutualAuthentication
 */
class ModifyListenerRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     Port?: int<1, 65535>|null,
     *     Protocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|null,
     *     SslPolicy?: string|null,
     *     Certificates?: list<Shapes\Certificate>|null,
     *     DefaultActions?: list<Shapes\Action>|null,
     *     AlpnPolicy?: list<string>|null,
     *     MutualAuthentication?: Shapes\MutualAuthenticationAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
