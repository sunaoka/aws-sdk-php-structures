<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteOutboundCrossClusterSearchConnection;

trait DeleteOutboundCrossClusterSearchConnectionTrait
{
    /**
     * @param DeleteOutboundCrossClusterSearchConnectionRequest $args
     * @return DeleteOutboundCrossClusterSearchConnectionResponse
     */
    public function deleteOutboundCrossClusterSearchConnection(
        DeleteOutboundCrossClusterSearchConnectionRequest $args,
    ) {
        $result = parent::deleteOutboundCrossClusterSearchConnection($args->toArray());
        return new DeleteOutboundCrossClusterSearchConnectionResponse($result->toArray());
    }
}
