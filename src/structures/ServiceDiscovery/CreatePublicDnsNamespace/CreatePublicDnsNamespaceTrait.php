<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreatePublicDnsNamespace;

trait CreatePublicDnsNamespaceTrait
{
    /**
     * @param CreatePublicDnsNamespaceRequest $args
     * @return CreatePublicDnsNamespaceResponse
     */
    public function createPublicDnsNamespace(CreatePublicDnsNamespaceRequest $args)
    {
        $result = parent::createPublicDnsNamespace($args->toArray());
        return new CreatePublicDnsNamespaceResponse($result->toArray());
    }
}
