<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteDevEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 */
class DeleteDevEndpointRequest extends Request
{
    /**
     * @param array{EndpointName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
