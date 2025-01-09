<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property int $healthCheckIntervalSeconds
 * @property int $healthCheckTimeoutSeconds
 * @property int $healthyThresholdCount
 * @property Matcher $matcher
 * @property string $path
 * @property int $port
 * @property 'HTTP'|'HTTPS'|'TCP' $protocol
 * @property 'HTTP1'|'HTTP2' $protocolVersion
 * @property int $unhealthyThresholdCount
 */
class HealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     healthCheckIntervalSeconds?: int,
     *     healthCheckTimeoutSeconds?: int,
     *     healthyThresholdCount?: int,
     *     matcher?: Matcher,
     *     path?: string,
     *     port?: int,
     *     protocol?: 'HTTP'|'HTTPS'|'TCP',
     *     protocolVersion?: 'HTTP1'|'HTTP2',
     *     unhealthyThresholdCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
