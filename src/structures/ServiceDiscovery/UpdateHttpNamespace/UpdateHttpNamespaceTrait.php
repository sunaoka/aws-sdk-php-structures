<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateHttpNamespace;

trait UpdateHttpNamespaceTrait
{
    /**
     * @param UpdateHttpNamespaceRequest $args
     * @return UpdateHttpNamespaceResponse
     */
    public function updateHttpNamespace(UpdateHttpNamespaceRequest $args)
    {
        $result = parent::updateHttpNamespace($args->toArray());
        return new UpdateHttpNamespaceResponse($result->toArray());
    }
}
