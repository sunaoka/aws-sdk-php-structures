<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property int<0, 300>|null $healthCheckIntervalSeconds
 * @property int<0, 120>|null $healthCheckTimeoutSeconds
 * @property int<0, 10>|null $healthyThresholdCount
 * @property Matcher|null $matcher
 * @property string|null $path
 * @property int<0, 65535>|null $port
 * @property 'HTTP'|'HTTPS'|'TCP'|null $protocol
 * @property 'HTTP1'|'HTTP2'|null $protocolVersion
 * @property int<0, 10>|null $unhealthyThresholdCount
 */
class HealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     healthCheckIntervalSeconds?: int<0, 300>|null,
     *     healthCheckTimeoutSeconds?: int<0, 120>|null,
     *     healthyThresholdCount?: int<0, 10>|null,
     *     matcher?: Matcher|null,
     *     path?: string|null,
     *     port?: int<0, 65535>|null,
     *     protocol?: 'HTTP'|'HTTPS'|'TCP'|null,
     *     protocolVersion?: 'HTTP1'|'HTTP2'|null,
     *     unhealthyThresholdCount?: int<0, 10>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
