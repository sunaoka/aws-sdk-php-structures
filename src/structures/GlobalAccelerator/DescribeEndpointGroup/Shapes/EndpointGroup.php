<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointGroupArn
 * @property string|null $EndpointGroupRegion
 * @property list<EndpointDescription>|null $EndpointDescriptions
 * @property float|null $TrafficDialPercentage
 * @property int<1, 65535>|null $HealthCheckPort
 * @property 'TCP'|'HTTP'|'HTTPS'|null $HealthCheckProtocol
 * @property string|null $HealthCheckPath
 * @property int<10, 30>|null $HealthCheckIntervalSeconds
 * @property int<1, 10>|null $ThresholdCount
 * @property list<PortOverride>|null $PortOverrides
 */
class EndpointGroup extends Shape
{
    /**
     * @param array{
     *     EndpointGroupArn?: string|null,
     *     EndpointGroupRegion?: string|null,
     *     EndpointDescriptions?: list<EndpointDescription>|null,
     *     TrafficDialPercentage?: float|null,
     *     HealthCheckPort?: int<1, 65535>|null,
     *     HealthCheckProtocol?: 'TCP'|'HTTP'|'HTTPS'|null,
     *     HealthCheckPath?: string|null,
     *     HealthCheckIntervalSeconds?: int<10, 30>|null,
     *     ThresholdCount?: int<1, 10>|null,
     *     PortOverrides?: list<PortOverride>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
