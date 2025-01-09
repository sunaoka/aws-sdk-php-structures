<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteRealtimeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MLModelId
 */
class DeleteRealtimeEndpointRequest extends Request
{
    /**
     * @param array{MLModelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
