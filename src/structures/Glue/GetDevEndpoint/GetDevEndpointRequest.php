<?php

namespace Sunaoka\Aws\Structures\Glue\GetDevEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 */
class GetDevEndpointRequest extends Request
{
    /**
     * @param array{EndpointName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
