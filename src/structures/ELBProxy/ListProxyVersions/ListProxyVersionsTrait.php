<?php

namespace Sunaoka\Aws\Structures\ELBProxy\ListProxyVersions;

trait ListProxyVersionsTrait
{
    /**
     * @param ListProxyVersionsRequest $args
     * @return ListProxyVersionsResponse
     */
    public function listProxyVersions(ListProxyVersionsRequest $args)
    {
        $result = parent::listProxyVersions($args->toArray());
        return new ListProxyVersionsResponse($result->toArray());
    }
}
