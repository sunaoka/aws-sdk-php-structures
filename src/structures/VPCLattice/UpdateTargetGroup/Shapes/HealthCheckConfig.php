<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property int<0, 300> $healthCheckIntervalSeconds
 * @property int<0, 120> $healthCheckTimeoutSeconds
 * @property int<0, 10> $healthyThresholdCount
 * @property Matcher $matcher
 * @property string $path
 * @property int<0, 65535> $port
 * @property 'HTTP'|'HTTPS'|'TCP' $protocol
 * @property 'HTTP1'|'HTTP2' $protocolVersion
 * @property int<0, 10> $unhealthyThresholdCount
 */
class HealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     healthCheckIntervalSeconds?: int<0, 300>,
     *     healthCheckTimeoutSeconds?: int<0, 120>,
     *     healthyThresholdCount?: int<0, 10>,
     *     matcher?: Matcher,
     *     path?: string,
     *     port?: int<0, 65535>,
     *     protocol?: 'HTTP'|'HTTPS'|'TCP',
     *     protocolVersion?: 'HTTP1'|'HTTP2',
     *     unhealthyThresholdCount?: int<0, 10>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
