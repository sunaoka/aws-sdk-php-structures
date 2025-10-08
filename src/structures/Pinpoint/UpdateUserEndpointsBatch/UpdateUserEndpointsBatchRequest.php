<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateUserEndpointsBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\EndpointBatchRequest $EndpointBatchRequest
 */
class UpdateUserEndpointsBatchRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndpointBatchRequest: Shapes\EndpointBatchRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
