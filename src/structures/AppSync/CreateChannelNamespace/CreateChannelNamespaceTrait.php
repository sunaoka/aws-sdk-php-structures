<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateChannelNamespace;

trait CreateChannelNamespaceTrait
{
    /**
     * @param CreateChannelNamespaceRequest $args
     * @return CreateChannelNamespaceResponse
     */
    public function createChannelNamespace(CreateChannelNamespaceRequest $args)
    {
        $result = parent::createChannelNamespace($args->toArray());
        return new CreateChannelNamespaceResponse($result->toArray());
    }
}
