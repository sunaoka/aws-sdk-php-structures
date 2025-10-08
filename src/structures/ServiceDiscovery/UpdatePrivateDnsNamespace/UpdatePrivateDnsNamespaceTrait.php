<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePrivateDnsNamespace;

trait UpdatePrivateDnsNamespaceTrait
{
    /**
     * @param UpdatePrivateDnsNamespaceRequest $args
     * @return UpdatePrivateDnsNamespaceResponse
     */
    public function updatePrivateDnsNamespace(UpdatePrivateDnsNamespaceRequest $args)
    {
        $result = parent::updatePrivateDnsNamespace($args->toArray());
        return new UpdatePrivateDnsNamespaceResponse($result->toArray());
    }
}
