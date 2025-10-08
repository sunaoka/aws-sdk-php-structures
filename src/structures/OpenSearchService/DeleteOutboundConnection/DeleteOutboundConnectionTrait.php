<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteOutboundConnection;

trait DeleteOutboundConnectionTrait
{
    /**
     * @param DeleteOutboundConnectionRequest $args
     * @return DeleteOutboundConnectionResponse
     */
    public function deleteOutboundConnection(DeleteOutboundConnectionRequest $args)
    {
        $result = parent::deleteOutboundConnection($args->toArray());
        return new DeleteOutboundConnectionResponse($result->toArray());
    }
}
