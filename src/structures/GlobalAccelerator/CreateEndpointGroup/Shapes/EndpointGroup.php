<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointGroupArn
 * @property string $EndpointGroupRegion
 * @property list<EndpointDescription> $EndpointDescriptions
 * @property float $TrafficDialPercentage
 * @property int $HealthCheckPort
 * @property 'TCP'|'HTTP'|'HTTPS' $HealthCheckProtocol
 * @property string $HealthCheckPath
 * @property int $HealthCheckIntervalSeconds
 * @property int $ThresholdCount
 * @property list<PortOverride> $PortOverrides
 */
class EndpointGroup extends Shape
{
    /**
     * @param array{
     *     EndpointGroupArn?: string,
     *     EndpointGroupRegion?: string,
     *     EndpointDescriptions?: list<EndpointDescription>,
     *     TrafficDialPercentage?: float,
     *     HealthCheckPort?: int,
     *     HealthCheckProtocol?: 'TCP'|'HTTP'|'HTTPS',
     *     HealthCheckPath?: string,
     *     HealthCheckIntervalSeconds?: int,
     *     ThresholdCount?: int,
     *     PortOverrides?: list<PortOverride>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
