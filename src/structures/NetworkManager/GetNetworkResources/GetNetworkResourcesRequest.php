<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $CoreNetworkId
 * @property string $RegisteredGatewayArn
 * @property string $AwsRegion
 * @property string $AccountId
 * @property string $ResourceType
 * @property string $ResourceArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetNetworkResourcesRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     CoreNetworkId?: string,
     *     RegisteredGatewayArn?: string,
     *     AwsRegion?: string,
     *     AccountId?: string,
     *     ResourceType?: string,
     *     ResourceArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
