<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListEndpointGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointGroupArn
 * @property string $EndpointGroupRegion
 * @property list<EndpointDescription> $EndpointDescriptions
 * @property float $TrafficDialPercentage
 * @property int<1, 65535> $HealthCheckPort
 * @property 'TCP'|'HTTP'|'HTTPS' $HealthCheckProtocol
 * @property string $HealthCheckPath
 * @property int<10, 30> $HealthCheckIntervalSeconds
 * @property int<1, 10> $ThresholdCount
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
     *     HealthCheckPort?: int<1, 65535>,
     *     HealthCheckProtocol?: 'TCP'|'HTTP'|'HTTPS',
     *     HealthCheckPath?: string,
     *     HealthCheckIntervalSeconds?: int<10, 30>,
     *     ThresholdCount?: int<1, 10>,
     *     PortOverrides?: list<PortOverride>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
