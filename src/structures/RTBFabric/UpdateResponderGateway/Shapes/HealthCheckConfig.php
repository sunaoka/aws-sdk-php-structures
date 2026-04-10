<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateResponderGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<80, 65535> $port
 * @property string $path
 * @property 'HTTP'|'HTTPS'|null $protocol
 * @property int<100, 5000>|null $timeoutMs
 * @property int<5, 60>|null $intervalSeconds
 * @property string|null $statusCodeMatcher
 * @property int<2, 10>|null $healthyThresholdCount
 * @property int<2, 10>|null $unhealthyThresholdCount
 */
class HealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     port: int<80, 65535>,
     *     path: string,
     *     protocol?: 'HTTP'|'HTTPS'|null,
     *     timeoutMs?: int<100, 5000>|null,
     *     intervalSeconds?: int<5, 60>|null,
     *     statusCodeMatcher?: string|null,
     *     healthyThresholdCount?: int<2, 10>|null,
     *     unhealthyThresholdCount?: int<2, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
