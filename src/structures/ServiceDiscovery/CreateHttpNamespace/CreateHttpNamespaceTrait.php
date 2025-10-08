<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreateHttpNamespace;

trait CreateHttpNamespaceTrait
{
    /**
     * @param CreateHttpNamespaceRequest $args
     * @return CreateHttpNamespaceResponse
     */
    public function createHttpNamespace(CreateHttpNamespaceRequest $args)
    {
        $result = parent::createHttpNamespace($args->toArray());
        return new CreateHttpNamespaceResponse($result->toArray());
    }
}
