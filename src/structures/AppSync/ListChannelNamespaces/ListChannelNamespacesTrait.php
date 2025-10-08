<?php

namespace Sunaoka\Aws\Structures\AppSync\ListChannelNamespaces;

trait ListChannelNamespacesTrait
{
    /**
     * @param ListChannelNamespacesRequest $args
     * @return ListChannelNamespacesResponse
     */
    public function listChannelNamespaces(ListChannelNamespacesRequest $args)
    {
        $result = parent::listChannelNamespaces($args->toArray());
        return new ListChannelNamespacesResponse($result->toArray());
    }
}
