<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetMarketplaceModelEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointArn
 */
class GetMarketplaceModelEndpointRequest extends Request
{
    /**
     * @param array{endpointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
