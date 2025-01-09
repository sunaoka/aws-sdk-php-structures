<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property string $EndpointGroupRegion
 * @property list<Shapes\EndpointConfiguration> $EndpointConfigurations
 * @property float $TrafficDialPercentage
 * @property int $HealthCheckPort
 * @property 'TCP'|'HTTP'|'HTTPS' $HealthCheckProtocol
 * @property string $HealthCheckPath
 * @property int $HealthCheckIntervalSeconds
 * @property int $ThresholdCount
 * @property string $IdempotencyToken
 * @property list<Shapes\PortOverride> $PortOverrides
 */
class CreateEndpointGroupRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     EndpointGroupRegion: string,
     *     EndpointConfigurations?: list<Shapes\EndpointConfiguration>,
     *     TrafficDialPercentage?: float,
     *     HealthCheckPort?: int,
     *     HealthCheckProtocol?: 'TCP'|'HTTP'|'HTTPS',
     *     HealthCheckPath?: string,
     *     HealthCheckIntervalSeconds?: int,
     *     ThresholdCount?: int,
     *     IdempotencyToken: string,
     *     PortOverrides?: list<Shapes\PortOverride>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
