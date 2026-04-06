<?php

namespace Sunaoka\Aws\Structures\AppSync\GetChannelNamespace;

trait GetChannelNamespaceTrait
{
    /**
     * @param GetChannelNamespaceRequest $args
     * @return GetChannelNamespaceResponse
     */
    public function getChannelNamespace(GetChannelNamespaceRequest $args)
    {
        $result = parent::getChannelNamespace($args->toArray());
        return new GetChannelNamespaceResponse($result->toArray());
    }
}
