<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 * @property list<Shapes\EndpointConfiguration> $EndpointConfigurations
 * @property float $TrafficDialPercentage
 * @property int<1, 65535> $HealthCheckPort
 * @property 'TCP'|'HTTP'|'HTTPS' $HealthCheckProtocol
 * @property string $HealthCheckPath
 * @property int<10, 30> $HealthCheckIntervalSeconds
 * @property int<1, 10> $ThresholdCount
 * @property list<Shapes\PortOverride> $PortOverrides
 */
class UpdateEndpointGroupRequest extends Request
{
    /**
     * @param array{
     *     EndpointGroupArn: string,
     *     EndpointConfigurations?: list<Shapes\EndpointConfiguration>,
     *     TrafficDialPercentage?: float,
     *     HealthCheckPort?: int<1, 65535>,
     *     HealthCheckProtocol?: 'TCP'|'HTTP'|'HTTPS',
     *     HealthCheckPath?: string,
     *     HealthCheckIntervalSeconds?: int<10, 30>,
     *     ThresholdCount?: int<1, 10>,
     *     PortOverrides?: list<Shapes\PortOverride>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
