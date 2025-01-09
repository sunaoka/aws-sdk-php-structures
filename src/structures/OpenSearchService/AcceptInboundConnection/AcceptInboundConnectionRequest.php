<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AcceptInboundConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionId
 */
class AcceptInboundConnectionRequest extends Request
{
    /**
     * @param array{ConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
