<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteCoreNetworkEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $coreNetworkEndpointId
 */
class DeleteCoreNetworkEndpointRequest extends Request
{
    /**
     * @param array{coreNetworkEndpointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
