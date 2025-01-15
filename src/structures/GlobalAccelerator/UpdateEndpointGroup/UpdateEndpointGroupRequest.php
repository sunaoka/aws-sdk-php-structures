<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 * @property list<Shapes\EndpointConfiguration>|null $EndpointConfigurations
 * @property float|null $TrafficDialPercentage
 * @property int<1, 65535>|null $HealthCheckPort
 * @property 'TCP'|'HTTP'|'HTTPS'|null $HealthCheckProtocol
 * @property string|null $HealthCheckPath
 * @property int<10, 30>|null $HealthCheckIntervalSeconds
 * @property int<1, 10>|null $ThresholdCount
 * @property list<Shapes\PortOverride>|null $PortOverrides
 */
class UpdateEndpointGroupRequest extends Request
{
    /**
     * @param array{
     *     EndpointGroupArn: string,
     *     EndpointConfigurations?: list<Shapes\EndpointConfiguration>|null,
     *     TrafficDialPercentage?: float|null,
     *     HealthCheckPort?: int<1, 65535>|null,
     *     HealthCheckProtocol?: 'TCP'|'HTTP'|'HTTPS'|null,
     *     HealthCheckPath?: string|null,
     *     HealthCheckIntervalSeconds?: int<10, 30>|null,
     *     ThresholdCount?: int<1, 10>|null,
     *     PortOverrides?: list<Shapes\PortOverride>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
