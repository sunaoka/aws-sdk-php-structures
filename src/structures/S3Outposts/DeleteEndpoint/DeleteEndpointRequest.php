<?php

namespace Sunaoka\Aws\Structures\S3Outposts\DeleteEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointId
 * @property string $OutpostId
 */
class DeleteEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointId: string,
     *     OutpostId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
