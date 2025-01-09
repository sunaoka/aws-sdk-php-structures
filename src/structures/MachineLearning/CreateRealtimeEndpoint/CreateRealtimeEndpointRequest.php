<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateRealtimeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MLModelId
 */
class CreateRealtimeEndpointRequest extends Request
{
    /**
     * @param array{MLModelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
