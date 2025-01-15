<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property string $EndpointGroupRegion
 * @property list<Shapes\EndpointConfiguration>|null $EndpointConfigurations
 * @property float|null $TrafficDialPercentage
 * @property int<1, 65535>|null $HealthCheckPort
 * @property 'TCP'|'HTTP'|'HTTPS'|null $HealthCheckProtocol
 * @property string|null $HealthCheckPath
 * @property int<10, 30>|null $HealthCheckIntervalSeconds
 * @property int<1, 10>|null $ThresholdCount
 * @property string $IdempotencyToken
 * @property list<Shapes\PortOverride>|null $PortOverrides
 */
class CreateEndpointGroupRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     EndpointGroupRegion: string,
     *     EndpointConfigurations?: list<Shapes\EndpointConfiguration>|null,
     *     TrafficDialPercentage?: float|null,
     *     HealthCheckPort?: int<1, 65535>|null,
     *     HealthCheckProtocol?: 'TCP'|'HTTP'|'HTTPS'|null,
     *     HealthCheckPath?: string|null,
     *     HealthCheckIntervalSeconds?: int<10, 30>|null,
     *     ThresholdCount?: int<1, 10>|null,
     *     IdempotencyToken: string,
     *     PortOverrides?: list<Shapes\PortOverride>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
