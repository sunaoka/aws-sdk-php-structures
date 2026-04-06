<?php

namespace Sunaoka\Aws\Structures\Sms\GetServers;

trait GetServersTrait
{
    /**
     * @param GetServersRequest $args
     * @return GetServersResponse
     */
    public function getServers(GetServersRequest $args)
    {
        $result = parent::getServers($args->toArray());
        return new GetServersResponse($result->toArray());
    }
}
