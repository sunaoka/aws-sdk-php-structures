<?php

namespace Sunaoka\Aws\Structures\drs\ListExtensibleSourceServers;

trait ListExtensibleSourceServersTrait
{
    /**
     * @param ListExtensibleSourceServersRequest $args
     * @return ListExtensibleSourceServersResponse
     */
    public function listExtensibleSourceServers(ListExtensibleSourceServersRequest $args)
    {
        $result = parent::listExtensibleSourceServers($args->toArray());
        return new ListExtensibleSourceServersResponse($result->toArray());
    }
}
