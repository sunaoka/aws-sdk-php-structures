<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePublicDnsNamespace;

trait UpdatePublicDnsNamespaceTrait
{
    /**
     * @param UpdatePublicDnsNamespaceRequest $args
     * @return UpdatePublicDnsNamespaceResponse
     */
    public function updatePublicDnsNamespace(UpdatePublicDnsNamespaceRequest $args)
    {
        $result = parent::updatePublicDnsNamespace($args->toArray());
        return new UpdatePublicDnsNamespaceResponse($result->toArray());
    }
}
