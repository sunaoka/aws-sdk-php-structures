<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateChannelNamespace;

trait UpdateChannelNamespaceTrait
{
    /**
     * @param UpdateChannelNamespaceRequest $args
     * @return UpdateChannelNamespaceResponse
     */
    public function updateChannelNamespace(UpdateChannelNamespaceRequest $args)
    {
        $result = parent::updateChannelNamespace($args->toArray());
        return new UpdateChannelNamespaceResponse($result->toArray());
    }
}
