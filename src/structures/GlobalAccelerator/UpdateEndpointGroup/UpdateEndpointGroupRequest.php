<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 * @property list<Shapes\EndpointConfiguration> $EndpointConfigurations
 * @property float $TrafficDialPercentage
 * @property int $HealthCheckPort
 * @property 'TCP'|'HTTP'|'HTTPS' $HealthCheckProtocol
 * @property string $HealthCheckPath
 * @property int $HealthCheckIntervalSeconds
 * @property int $ThresholdCount
 * @property list<Shapes\PortOverride> $PortOverrides
 */
class UpdateEndpointGroupRequest extends Request
{
    /**
     * @param array{
     *     EndpointGroupArn: string,
     *     EndpointConfigurations?: list<Shapes\EndpointConfiguration>,
     *     TrafficDialPercentage?: float,
     *     HealthCheckPort?: int,
     *     HealthCheckProtocol?: 'TCP'|'HTTP'|'HTTPS',
     *     HealthCheckPath?: string,
     *     HealthCheckIntervalSeconds?: int,
     *     ThresholdCount?: int,
     *     PortOverrides?: list<Shapes\PortOverride>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
