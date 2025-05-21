<?php

namespace Sunaoka\Aws\Structures\DSQL\GetVpcEndpointServiceName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetVpcEndpointServiceNameRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
