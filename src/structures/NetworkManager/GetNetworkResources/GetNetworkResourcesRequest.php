<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string|null $CoreNetworkId
 * @property string|null $RegisteredGatewayArn
 * @property string|null $AwsRegion
 * @property string|null $AccountId
 * @property string|null $ResourceType
 * @property string|null $ResourceArn
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetNetworkResourcesRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     CoreNetworkId?: string|null,
     *     RegisteredGatewayArn?: string|null,
     *     AwsRegion?: string|null,
     *     AccountId?: string|null,
     *     ResourceType?: string|null,
     *     ResourceArn?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
