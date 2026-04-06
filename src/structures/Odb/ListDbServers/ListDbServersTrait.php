<?php

namespace Sunaoka\Aws\Structures\Odb\ListDbServers;

trait ListDbServersTrait
{
    /**
     * @param ListDbServersRequest $args
     * @return ListDbServersResponse
     */
    public function listDbServers(ListDbServersRequest $args)
    {
        $result = parent::listDbServers($args->toArray());
        return new ListDbServersResponse($result->toArray());
    }
}
