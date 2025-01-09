<?php

namespace Sunaoka\Aws\Structures\Bedrock\RegisterMarketplaceModelEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointIdentifier
 * @property string $modelSourceIdentifier
 */
class RegisterMarketplaceModelEndpointRequest extends Request
{
    /**
     * @param array{
     *     endpointIdentifier: string,
     *     modelSourceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
