<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $clientToken
 */
class DeleteVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
