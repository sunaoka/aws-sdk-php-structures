<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\ListSocialConnections;

trait ListSocialConnectionsTrait
{
    /**
     * @param ListSocialConnectionsRequest $args
     * @return ListSocialConnectionsResponse
     */
    public function listSocialConnections(ListSocialConnectionsRequest $args)
    {
        $result = parent::listSocialConnections($args->toArray());
        return new ListSocialConnectionsResponse($result->toArray());
    }
}
