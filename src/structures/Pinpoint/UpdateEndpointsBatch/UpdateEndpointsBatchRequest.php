<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEndpointsBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\EndpointBatchRequest $EndpointBatchRequest
 */
class UpdateEndpointsBatchRequest extends Request
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
