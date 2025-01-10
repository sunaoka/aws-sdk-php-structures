<?php

namespace Sunaoka\Aws\Structures\ApiGatewayManagementApi\PostToConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Data
 * @property string $ConnectionId
 */
class PostToConnectionRequest extends Request
{
    /**
     * @param array{
     *     Data: string|resource|\Psr\Http\Message\StreamInterface,
     *     ConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
