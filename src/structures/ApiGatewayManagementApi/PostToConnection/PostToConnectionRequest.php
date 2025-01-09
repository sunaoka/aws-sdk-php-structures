<?php

namespace Sunaoka\Aws\Structures\ApiGatewayManagementApi\PostToConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Data
 * @property string $ConnectionId
 */
class PostToConnectionRequest extends Request
{
    /**
     * @param array{
     *     Data: string,
     *     ConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
