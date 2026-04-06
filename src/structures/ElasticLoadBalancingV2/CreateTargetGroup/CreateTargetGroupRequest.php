<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|'QUIC'|'TCP_QUIC'|null $Protocol
 * @property string|null $ProtocolVersion
 * @property int<1, 65535>|null $Port
 * @property string|null $VpcId
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|'QUIC'|'TCP_QUIC'|null $HealthCheckProtocol
 * @property string|null $HealthCheckPort
 * @property bool|null $HealthCheckEnabled
 * @property string|null $HealthCheckPath
 * @property int<5, 300>|null $HealthCheckIntervalSeconds
 * @property int<2, 120>|null $HealthCheckTimeoutSeconds
 * @property int<2, 10>|null $HealthyThresholdCount
 * @property int<2, 10>|null $UnhealthyThresholdCount
 * @property Shapes\Matcher|null $Matcher
 * @property 'instance'|'ip'|'lambda'|'alb'|null $TargetType
 * @property list<Shapes\Tag>|null $Tags
 * @property 'ipv4'|'ipv6'|null $IpAddressType
 * @property int<1, 65535>|null $TargetControlPort
 */
class CreateTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Protocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|'QUIC'|'TCP_QUIC'|null,
     *     ProtocolVersion?: string|null,
     *     Port?: int<1, 65535>|null,
     *     VpcId?: string|null,
     *     HealthCheckProtocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|'QUIC'|'TCP_QUIC'|null,
     *     HealthCheckPort?: string|null,
     *     HealthCheckEnabled?: bool|null,
     *     HealthCheckPath?: string|null,
     *     HealthCheckIntervalSeconds?: int<5, 300>|null,
     *     HealthCheckTimeoutSeconds?: int<2, 120>|null,
     *     HealthyThresholdCount?: int<2, 10>|null,
     *     UnhealthyThresholdCount?: int<2, 10>|null,
     *     Matcher?: Shapes\Matcher|null,
     *     TargetType?: 'instance'|'ip'|'lambda'|'alb'|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     IpAddressType?: 'ipv4'|'ipv6'|null,
     *     TargetControlPort?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
