<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EndpointId
 * @property Shapes\EndpointRequest $EndpointRequest
 */
class UpdateEndpointRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndpointId: string,
     *     EndpointRequest: Shapes\EndpointRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
