<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteMarketplaceModelEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointArn
 */
class DeleteMarketplaceModelEndpointRequest extends Request
{
    /**
     * @param array{endpointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
