<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcEndpointId
 */
class DeleteVpcEndpointRequest extends Request
{
    /**
     * @param array{VpcEndpointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
