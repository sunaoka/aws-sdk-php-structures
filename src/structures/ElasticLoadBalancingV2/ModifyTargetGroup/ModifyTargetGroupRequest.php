<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetGroupArn
 * @property 'HTTP'|'HTTPS'|'TCP'|'TLS'|'UDP'|'TCP_UDP'|'GENEVE' $HealthCheckProtocol
 * @property string $HealthCheckPort
 * @property string $HealthCheckPath
 * @property bool $HealthCheckEnabled
 * @property int $HealthCheckIntervalSeconds
 * @property int $HealthCheckTimeoutSeconds
 * @property int $HealthyThresholdCount
 * @property int $UnhealthyThresholdCount
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
     *     HealthCheckIntervalSeconds?: int,
     *     HealthCheckTimeoutSeconds?: int,
     *     HealthyThresholdCount?: int,
     *     UnhealthyThresholdCount?: int,
     *     Matcher?: Shapes\Matcher
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
