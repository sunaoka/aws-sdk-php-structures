<?php

namespace Sunaoka\Aws\Structures\ApiGatewayManagementApi\DeleteConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionId
 */
class DeleteConnectionRequest extends Request
{
    /**
     * @param array{ConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
