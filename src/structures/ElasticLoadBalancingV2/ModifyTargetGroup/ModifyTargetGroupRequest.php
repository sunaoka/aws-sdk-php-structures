<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetGroupArn
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|'QUIC'|'TCP_QUIC'|null $HealthCheckProtocol
 * @property string|null $HealthCheckPort
 * @property string|null $HealthCheckPath
 * @property bool|null $HealthCheckEnabled
 * @property int<5, 300>|null $HealthCheckIntervalSeconds
 * @property int<2, 120>|null $HealthCheckTimeoutSeconds
 * @property int<2, 10>|null $HealthyThresholdCount
 * @property int<2, 10>|null $UnhealthyThresholdCount
 * @property Shapes\Matcher|null $Matcher
 */
class ModifyTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     TargetGroupArn: string,
     *     HealthCheckProtocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE'|'QUIC'|'TCP_QUIC'|null,
     *     HealthCheckPort?: string|null,
     *     HealthCheckPath?: string|null,
     *     HealthCheckEnabled?: bool|null,
     *     HealthCheckIntervalSeconds?: int<5, 300>|null,
     *     HealthCheckTimeoutSeconds?: int<2, 120>|null,
     *     HealthyThresholdCount?: int<2, 10>|null,
     *     UnhealthyThresholdCount?: int<2, 10>|null,
     *     Matcher?: Shapes\Matcher|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
