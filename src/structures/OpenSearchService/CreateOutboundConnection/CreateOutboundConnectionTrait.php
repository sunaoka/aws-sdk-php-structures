<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateOutboundConnection;

trait CreateOutboundConnectionTrait
{
    /**
     * @param CreateOutboundConnectionRequest $args
     * @return CreateOutboundConnectionResponse
     */
    public function createOutboundConnection(CreateOutboundConnectionRequest $args)
    {
        $result = parent::createOutboundConnection($args->toArray());
        return new CreateOutboundConnectionResponse($result->toArray());
    }
}
