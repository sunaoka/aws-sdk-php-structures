<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateMarketplaceModelEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointArn
 * @property Shapes\EndpointConfig $endpointConfig
 * @property string $clientRequestToken
 */
class UpdateMarketplaceModelEndpointRequest extends Request
{
    /**
     * @param array{
     *     endpointArn: string,
     *     endpointConfig: Shapes\EndpointConfig,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
