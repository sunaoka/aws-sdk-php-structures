<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegisteredGatewayArn
 * @property string|null $CoreNetworkId
 * @property string|null $AwsRegion
 * @property string|null $AccountId
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property string|null $ResourceArn
 * @property string|null $Definition
 * @property \Aws\Api\DateTimeResult|null $DefinitionTimestamp
 * @property list<Tag>|null $Tags
 * @property array<string, string>|null $Metadata
 */
class NetworkResource extends Shape
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
     *     Definition?: string|null,
     *     DefinitionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null,
     *     Metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
