<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HTTP'|'HTTPS'|null $healthCheckProtocol
 * @property int|null $healthCheckPort
 * @property string|null $healthCheckPath
 * @property int|null $healthCheckTimeoutSeconds
 * @property int|null $healthCheckIntervalSeconds
 * @property int|null $healthyThresholdCount
 * @property int|null $unhealthyThresholdCount
 * @property GatewayConnectorHealthCheckMatcher|null $matcher
 */
class GatewayConnectorHealthCheck extends Shape
{
    /**
     * @param array{
     *     healthCheckProtocol?: 'HTTP'|'HTTPS'|null,
     *     healthCheckPort?: int|null,
     *     healthCheckPath?: string|null,
     *     healthCheckTimeoutSeconds?: int|null,
     *     healthCheckIntervalSeconds?: int|null,
     *     healthyThresholdCount?: int|null,
     *     unhealthyThresholdCount?: int|null,
     *     matcher?: GatewayConnectorHealthCheckMatcher|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
