<?php

namespace Sunaoka\Aws\Structures\GameLift\ListGameServers;

trait ListGameServersTrait
{
    /**
     * @param ListGameServersRequest $args
     * @return ListGameServersResponse
     */
    public function listGameServers(ListGameServersRequest $args)
    {
        $result = parent::listGameServers($args->toArray());
        return new ListGameServersResponse($result->toArray());
    }
}
