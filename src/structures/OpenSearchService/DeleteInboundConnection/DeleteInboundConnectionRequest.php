<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteInboundConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionId
 */
class DeleteInboundConnectionRequest extends Request
{
    /**
     * @param array{ConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
