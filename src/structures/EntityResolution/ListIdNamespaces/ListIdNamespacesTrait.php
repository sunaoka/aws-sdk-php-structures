<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListIdNamespaces;

trait ListIdNamespacesTrait
{
    /**
     * @param ListIdNamespacesRequest $args
     * @return ListIdNamespacesResponse
     */
    public function listIdNamespaces(ListIdNamespacesRequest $args)
    {
        $result = parent::listIdNamespaces($args->toArray());
        return new ListIdNamespacesResponse($result->toArray());
    }
}
