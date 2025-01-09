<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcEndpointId
 * @property Shapes\VPCOptions $VpcOptions
 */
class UpdateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     VpcEndpointId: string,
     *     VpcOptions: Shapes\VPCOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
