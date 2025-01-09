<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkTelemetry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegisteredGatewayArn
 * @property string $CoreNetworkId
 * @property string $AwsRegion
 * @property string $AccountId
 * @property string $ResourceType
 * @property string $ResourceId
 * @property string $ResourceArn
 * @property string $Address
 * @property ConnectionHealth $Health
 */
class NetworkTelemetry extends Shape
{
    /**
     * @param array{
     *     RegisteredGatewayArn?: string,
     *     CoreNetworkId?: string,
     *     AwsRegion?: string,
     *     AccountId?: string,
     *     ResourceType?: string,
     *     ResourceId?: string,
     *     ResourceArn?: string,
     *     Address?: string,
     *     Health?: ConnectionHealth
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
