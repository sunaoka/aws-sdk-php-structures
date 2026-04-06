<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteMultiRegionEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 */
class DeleteMultiRegionEndpointRequest extends Request
{
    /**
     * @param array{EndpointName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
