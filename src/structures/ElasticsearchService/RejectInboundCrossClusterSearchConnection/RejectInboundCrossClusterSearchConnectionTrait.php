<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\RejectInboundCrossClusterSearchConnection;

trait RejectInboundCrossClusterSearchConnectionTrait
{
    /**
     * @param RejectInboundCrossClusterSearchConnectionRequest $args
     * @return RejectInboundCrossClusterSearchConnectionResponse
     */
    public function rejectInboundCrossClusterSearchConnection(RejectInboundCrossClusterSearchConnectionRequest $args)
    {
        $result = parent::rejectInboundCrossClusterSearchConnection($args->toArray());
        return new RejectInboundCrossClusterSearchConnectionResponse($result->toArray());
    }
}
