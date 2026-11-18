<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetCoreNetworkEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $coreNetworkEndpointId
 */
class GetCoreNetworkEndpointRequest extends Request
{
    /**
     * @param array{coreNetworkEndpointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
