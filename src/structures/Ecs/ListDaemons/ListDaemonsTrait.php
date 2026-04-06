<?php

namespace Sunaoka\Aws\Structures\Ecs\ListDaemons;

trait ListDaemonsTrait
{
    /**
     * @param ListDaemonsRequest $args
     * @return ListDaemonsResponse
     */
    public function listDaemons(ListDaemonsRequest $args)
    {
        $result = parent::listDaemons($args->toArray());
        return new ListDaemonsResponse($result->toArray());
    }
}
