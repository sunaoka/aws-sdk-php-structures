<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeregisterMarketplaceModelEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointArn
 */
class DeregisterMarketplaceModelEndpointRequest extends Request
{
    /**
     * @param array{endpointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
