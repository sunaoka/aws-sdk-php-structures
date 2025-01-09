<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE' $Protocol
 * @property string $ProtocolVersion
 * @property int $Port
 * @property string $VpcId
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE' $HealthCheckProtocol
 * @property string $HealthCheckPort
 * @property bool $HealthCheckEnabled
 * @property string $HealthCheckPath
 * @property int $HealthCheckIntervalSeconds
 * @property int $HealthCheckTimeoutSeconds
 * @property int $HealthyThresholdCount
 * @property int $UnhealthyThresholdCount
 * @property Shapes\Matcher $Matcher
 * @property 'instance'|'ip'|'lambda'|'alb' $TargetType
 * @property list<Shapes\Tag> $Tags
 * @property 'ipv4'|'ipv6' $IpAddressType
 */
class CreateTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Protocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE',
     *     ProtocolVersion?: string,
     *     Port?: int,
     *     VpcId?: string,
     *     HealthCheckProtocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE',
     *     HealthCheckPort?: string,
     *     HealthCheckEnabled?: bool,
     *     HealthCheckPath?: string,
     *     HealthCheckIntervalSeconds?: int,
     *     HealthCheckTimeoutSeconds?: int,
     *     HealthyThresholdCount?: int,
     *     UnhealthyThresholdCount?: int,
     *     Matcher?: Shapes\Matcher,
     *     TargetType?: 'instance'|'ip'|'lambda'|'alb',
     *     Tags?: list<Shapes\Tag>,
     *     IpAddressType?: 'ipv4'|'ipv6'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
