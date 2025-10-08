<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListResourceServers;

trait ListResourceServersTrait
{
    /**
     * @param ListResourceServersRequest $args
     * @return ListResourceServersResponse
     */
    public function listResourceServers(ListResourceServersRequest $args)
    {
        $result = parent::listResourceServers($args->toArray());
        return new ListResourceServersResponse($result->toArray());
    }
}
