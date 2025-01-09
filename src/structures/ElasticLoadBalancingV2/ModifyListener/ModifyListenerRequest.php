<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property int<1, 65535> $Port
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE' $Protocol
 * @property string $SslPolicy
 * @property list<Shapes\Certificate> $Certificates
 * @property list<Shapes\Action> $DefaultActions
 * @property list<string> $AlpnPolicy
 * @property Shapes\MutualAuthenticationAttributes $MutualAuthentication
 */
class ModifyListenerRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     Port?: int<1, 65535>,
     *     Protocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE',
     *     SslPolicy?: string,
     *     Certificates?: list<Shapes\Certificate>,
     *     DefaultActions?: list<Shapes\Action>,
     *     AlpnPolicy?: list<string>,
     *     MutualAuthentication?: Shapes\MutualAuthenticationAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
