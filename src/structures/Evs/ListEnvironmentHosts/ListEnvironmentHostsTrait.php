<?php

namespace Sunaoka\Aws\Structures\Evs\ListEnvironmentHosts;

trait ListEnvironmentHostsTrait
{
    /**
     * @param ListEnvironmentHostsRequest $args
     * @return ListEnvironmentHostsResponse
     */
    public function listEnvironmentHosts(ListEnvironmentHostsRequest $args)
    {
        $result = parent::listEnvironmentHosts($args->toArray());
        return new ListEnvironmentHostsResponse($result->toArray());
    }
}
