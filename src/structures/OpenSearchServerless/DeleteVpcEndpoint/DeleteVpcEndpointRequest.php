<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $id
 */
class DeleteVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
