<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetGroupArn
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE' $HealthCheckProtocol
 * @property string $HealthCheckPort
 * @property string $HealthCheckPath
 * @property bool $HealthCheckEnabled
 * @property int<5, 300> $HealthCheckIntervalSeconds
 * @property int<2, 120> $HealthCheckTimeoutSeconds
 * @property int<2, 10> $HealthyThresholdCount
 * @property int<2, 10> $UnhealthyThresholdCount
 * @property Shapes\Matcher $Matcher
 */
class ModifyTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     TargetGroupArn: string,
     *     HealthCheckProtocol?: 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE',
     *     HealthCheckPort?: string,
     *     HealthCheckPath?: string,
     *     HealthCheckEnabled?: bool,
     *     HealthCheckIntervalSeconds?: int<5, 300>,
     *     HealthCheckTimeoutSeconds?: int<2, 120>,
     *     HealthyThresholdCount?: int<2, 10>,
     *     UnhealthyThresholdCount?: int<2, 10>,
     *     Matcher?: Shapes\Matcher
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
