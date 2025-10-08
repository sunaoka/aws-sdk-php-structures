<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteChannelNamespace;

trait DeleteChannelNamespaceTrait
{
    /**
     * @param DeleteChannelNamespaceRequest $args
     * @return DeleteChannelNamespaceResponse
     */
    public function deleteChannelNamespace(DeleteChannelNamespaceRequest $args)
    {
        $result = parent::deleteChannelNamespace($args->toArray());
        return new DeleteChannelNamespaceResponse($result->toArray());
    }
}
