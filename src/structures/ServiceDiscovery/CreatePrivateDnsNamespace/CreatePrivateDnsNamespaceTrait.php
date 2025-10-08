<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreatePrivateDnsNamespace;

trait CreatePrivateDnsNamespaceTrait
{
    /**
     * @param CreatePrivateDnsNamespaceRequest $args
     * @return CreatePrivateDnsNamespaceResponse
     */
    public function createPrivateDnsNamespace(CreatePrivateDnsNamespaceRequest $args)
    {
        $result = parent::createPrivateDnsNamespace($args->toArray());
        return new CreatePrivateDnsNamespaceResponse($result->toArray());
    }
}
