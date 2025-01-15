<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkTelemetry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegisteredGatewayArn
 * @property string|null $CoreNetworkId
 * @property string|null $AwsRegion
 * @property string|null $AccountId
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property string|null $ResourceArn
 * @property string|null $Address
 * @property ConnectionHealth|null $Health
 */
class NetworkTelemetry extends Shape
{
    /**
     * @param array{
     *     RegisteredGatewayArn?: string|null,
     *     CoreNetworkId?: string|null,
     *     AwsRegion?: string|null,
     *     AccountId?: string|null,
     *     ResourceType?: string|null,
     *     ResourceId?: string|null,
     *     ResourceArn?: string|null,
     *     Address?: string|null,
     *     Health?: ConnectionHealth|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
