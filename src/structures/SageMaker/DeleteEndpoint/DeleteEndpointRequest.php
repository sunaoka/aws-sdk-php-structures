<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 */
class DeleteEndpointRequest extends Request
{
    /**
     * @param array{EndpointName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
