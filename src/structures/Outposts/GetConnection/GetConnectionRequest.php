<?php

namespace Sunaoka\Aws\Structures\Outposts\GetConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionId
 */
class GetConnectionRequest extends Request
{
    /**
     * @param array{ConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
