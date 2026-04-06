<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateMarketplaceModelEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointArn
 * @property Shapes\EndpointConfig $endpointConfig
 * @property string|null $clientRequestToken
 */
class UpdateMarketplaceModelEndpointRequest extends Request
{
    /**
     * @param array{
     *     endpointArn: string,
     *     endpointConfig: Shapes\EndpointConfig,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
