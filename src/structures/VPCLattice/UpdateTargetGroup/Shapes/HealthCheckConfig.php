<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property 'HTTP'|'HTTPS'|'TCP'|null $protocol
 * @property 'HTTP1'|'HTTP2'|null $protocolVersion
 * @property int<0, 65535>|null $port
 * @property string|null $path
 * @property int<0, 300>|null $healthCheckIntervalSeconds
 * @property int<0, 120>|null $healthCheckTimeoutSeconds
 * @property int<0, 10>|null $healthyThresholdCount
 * @property int<0, 10>|null $unhealthyThresholdCount
 * @property Matcher|null $matcher
 */
class HealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     protocol?: 'HTTP'|'HTTPS'|'TCP'|null,
     *     protocolVersion?: 'HTTP1'|'HTTP2'|null,
     *     port?: int<0, 65535>|null,
     *     path?: string|null,
     *     healthCheckIntervalSeconds?: int<0, 300>|null,
     *     healthCheckTimeoutSeconds?: int<0, 120>|null,
     *     healthyThresholdCount?: int<0, 10>|null,
     *     unhealthyThresholdCount?: int<0, 10>|null,
     *     matcher?: Matcher|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
