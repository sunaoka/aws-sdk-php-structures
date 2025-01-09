<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBProxyEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyEndpointName
 */
class DeleteDBProxyEndpointRequest extends Request
{
    /**
     * @param array{DBProxyEndpointName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
