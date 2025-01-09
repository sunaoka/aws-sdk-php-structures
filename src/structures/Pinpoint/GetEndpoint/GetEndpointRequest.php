<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EndpointId
 */
class GetEndpointRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndpointId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
