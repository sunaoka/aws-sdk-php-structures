<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\AcceptInboundCrossClusterSearchConnection;

trait AcceptInboundCrossClusterSearchConnectionTrait
{
    /**
     * @param AcceptInboundCrossClusterSearchConnectionRequest $args
     * @return AcceptInboundCrossClusterSearchConnectionResponse
     */
    public function acceptInboundCrossClusterSearchConnection(AcceptInboundCrossClusterSearchConnectionRequest $args)
    {
        $result = parent::acceptInboundCrossClusterSearchConnection($args->toArray());
        return new AcceptInboundCrossClusterSearchConnectionResponse($result->toArray());
    }
}
