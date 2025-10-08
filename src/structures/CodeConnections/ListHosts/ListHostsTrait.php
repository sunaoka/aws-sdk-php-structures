<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListHosts;

trait ListHostsTrait
{
    /**
     * @param ListHostsRequest $args
     * @return ListHostsResponse
     */
    public function listHosts(ListHostsRequest $args)
    {
        $result = parent::listHosts($args->toArray());
        return new ListHostsResponse($result->toArray());
    }
}
