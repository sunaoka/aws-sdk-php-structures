<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AcceptInboundConnection;

trait AcceptInboundConnectionTrait
{
    /**
     * @param AcceptInboundConnectionRequest $args
     * @return AcceptInboundConnectionResponse
     */
    public function acceptInboundConnection(AcceptInboundConnectionRequest $args)
    {
        $result = parent::acceptInboundConnection($args->toArray());
        return new AcceptInboundConnectionResponse($result->toArray());
    }
}
