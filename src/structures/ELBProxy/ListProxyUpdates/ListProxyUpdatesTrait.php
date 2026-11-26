<?php

namespace Sunaoka\Aws\Structures\ELBProxy\ListProxyUpdates;

trait ListProxyUpdatesTrait
{
    /**
     * @param ListProxyUpdatesRequest $args
     * @return ListProxyUpdatesResponse
     */
    public function listProxyUpdates(ListProxyUpdatesRequest $args)
    {
        $result = parent::listProxyUpdates($args->toArray());
        return new ListProxyUpdatesResponse($result->toArray());
    }
}
