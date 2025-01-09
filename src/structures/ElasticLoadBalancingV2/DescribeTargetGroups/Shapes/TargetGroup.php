<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetGroupArn
 * @property string $TargetGroupName
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE' $Protocol
 * @property int $Port
 * @property string $VpcId
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE' $HealthCheckProtocol
 * @property string $HealthCheckPort
 * @property bool $HealthCheckEnabled
 * @property int $HealthCheckIntervalSeconds
 * @property int $HealthCheckTimeoutSeconds
 * @property int $HealthyThresholdCount
 * @property int $UnhealthyThresholdCount
 * @property string $HealthCheckPath
 * @property Matcher $Matcher
 * @property list<string> $LoadBalancerArns
 * @property 'instance'|'ip'|'lambda'|'alb' $TargetType
 * @property string $ProtocolVersion
 * @property 'ipv4'|'ipv6' $IpAddressType
 */
class TargetGroup extends Shape
{
    /**
     * @param array{
     *     TargetGroupArn?: string,
     *     TargetGroupName?: string,
     *     Protocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE',
     *     Port?: int,
     *     VpcId?: string,
     *     HealthCheckProtocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE',
     *     HealthCheckPort?: string,
     *     HealthCheckEnabled?: bool,
     *     HealthCheckIntervalSeconds?: int,
     *     HealthCheckTimeoutSeconds?: int,
     *     HealthyThresholdCount?: int,
     *     UnhealthyThresholdCount?: int,
     *     HealthCheckPath?: string,
     *     Matcher?: Matcher,
     *     LoadBalancerArns?: list<string>,
     *     TargetType?: 'instance'|'ip'|'lambda'|'alb',
     *     ProtocolVersion?: string,
     *     IpAddressType?: 'ipv4'|'ipv6'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
