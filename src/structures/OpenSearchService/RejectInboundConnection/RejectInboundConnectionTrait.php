<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RejectInboundConnection;

trait RejectInboundConnectionTrait
{
    /**
     * @param RejectInboundConnectionRequest $args
     * @return RejectInboundConnectionResponse
     */
    public function rejectInboundConnection(RejectInboundConnectionRequest $args)
    {
        $result = parent::rejectInboundConnection($args->toArray());
        return new RejectInboundConnectionResponse($result->toArray());
    }
}
