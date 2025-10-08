<?php

namespace Sunaoka\Aws\Structures\OSIS\DeletePipelineEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointId
 */
class DeletePipelineEndpointRequest extends Request
{
    /**
     * @param array{EndpointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
