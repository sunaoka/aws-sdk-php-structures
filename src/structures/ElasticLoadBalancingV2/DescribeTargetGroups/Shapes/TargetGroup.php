<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetGroupArn
 * @property string|null $TargetGroupName
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|null $Protocol
 * @property int<1, 65535>|null $Port
 * @property string|null $VpcId
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|null $HealthCheckProtocol
 * @property string|null $HealthCheckPort
 * @property bool|null $HealthCheckEnabled
 * @property int<5, 300>|null $HealthCheckIntervalSeconds
 * @property int<2, 120>|null $HealthCheckTimeoutSeconds
 * @property int<2, 10>|null $HealthyThresholdCount
 * @property int<2, 10>|null $UnhealthyThresholdCount
 * @property string|null $HealthCheckPath
 * @property Matcher|null $Matcher
 * @property list<string>|null $LoadBalancerArns
 * @property 'instance'|'ip'|'lambda'|'alb'|null $TargetType
 * @property string|null $ProtocolVersion
 * @property 'ipv4'|'ipv6'|null $IpAddressType
 */
class TargetGroup extends Shape
{
    /**
     * @param array{
     *     TargetGroupArn?: string|null,
     *     TargetGroupName?: string|null,
     *     Protocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|null,
     *     Port?: int<1, 65535>|null,
     *     VpcId?: string|null,
     *     HealthCheckProtocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|null,
     *     HealthCheckPort?: string|null,
     *     HealthCheckEnabled?: bool|null,
     *     HealthCheckIntervalSeconds?: int<5, 300>|null,
     *     HealthCheckTimeoutSeconds?: int<2, 120>|null,
     *     HealthyThresholdCount?: int<2, 10>|null,
     *     UnhealthyThresholdCount?: int<2, 10>|null,
     *     HealthCheckPath?: string|null,
     *     Matcher?: Matcher|null,
     *     LoadBalancerArns?: list<string>|null,
     *     TargetType?: 'instance'|'ip'|'lambda'|'alb'|null,
     *     ProtocolVersion?: string|null,
     *     IpAddressType?: 'ipv4'|'ipv6'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
