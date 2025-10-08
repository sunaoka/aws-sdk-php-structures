<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteInboundCrossClusterSearchConnection;

trait DeleteInboundCrossClusterSearchConnectionTrait
{
    /**
     * @param DeleteInboundCrossClusterSearchConnectionRequest $args
     * @return DeleteInboundCrossClusterSearchConnectionResponse
     */
    public function deleteInboundCrossClusterSearchConnection(DeleteInboundCrossClusterSearchConnectionRequest $args)
    {
        $result = parent::deleteInboundCrossClusterSearchConnection($args->toArray());
        return new DeleteInboundCrossClusterSearchConnectionResponse($result->toArray());
    }
}
