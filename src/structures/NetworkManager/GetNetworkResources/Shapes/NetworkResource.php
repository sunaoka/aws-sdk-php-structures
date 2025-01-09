<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegisteredGatewayArn
 * @property string $CoreNetworkId
 * @property string $AwsRegion
 * @property string $AccountId
 * @property string $ResourceType
 * @property string $ResourceId
 * @property string $ResourceArn
 * @property string $Definition
 * @property \Aws\Api\DateTimeResult $DefinitionTimestamp
 * @property list<Tag> $Tags
 * @property array<string, string> $Metadata
 */
class NetworkResource extends Shape
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
     *     Definition?: string,
     *     DefinitionTimestamp?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>,
     *     Metadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
