<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RejectInboundConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionId
 */
class RejectInboundConnectionRequest extends Request
{
    /**
     * @param array{ConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
