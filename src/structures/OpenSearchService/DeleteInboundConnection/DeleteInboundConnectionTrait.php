<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteInboundConnection;

trait DeleteInboundConnectionTrait
{
    /**
     * @param DeleteInboundConnectionRequest $args
     * @return DeleteInboundConnectionResponse
     */
    public function deleteInboundConnection(DeleteInboundConnectionRequest $args)
    {
        $result = parent::deleteInboundConnection($args->toArray());
        return new DeleteInboundConnectionResponse($result->toArray());
    }
}
