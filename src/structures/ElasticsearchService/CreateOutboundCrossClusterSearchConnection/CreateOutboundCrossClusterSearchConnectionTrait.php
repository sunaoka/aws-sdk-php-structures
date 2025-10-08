<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateOutboundCrossClusterSearchConnection;

trait CreateOutboundCrossClusterSearchConnectionTrait
{
    /**
     * @param CreateOutboundCrossClusterSearchConnectionRequest $args
     * @return CreateOutboundCrossClusterSearchConnectionResponse
     */
    public function createOutboundCrossClusterSearchConnection(
        CreateOutboundCrossClusterSearchConnectionRequest $args,
    ) {
        $result = parent::createOutboundCrossClusterSearchConnection($args->toArray());
        return new CreateOutboundCrossClusterSearchConnectionResponse($result->toArray());
    }
}
