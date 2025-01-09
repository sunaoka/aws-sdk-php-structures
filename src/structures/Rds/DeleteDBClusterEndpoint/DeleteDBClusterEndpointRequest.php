<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBClusterEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterEndpointIdentifier
 */
class DeleteDBClusterEndpointRequest extends Request
{
    /**
     * @param array{DBClusterEndpointIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
