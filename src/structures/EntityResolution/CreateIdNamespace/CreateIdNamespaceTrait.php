<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdNamespace;

trait CreateIdNamespaceTrait
{
    /**
     * @param CreateIdNamespaceRequest $args
     * @return CreateIdNamespaceResponse
     */
    public function createIdNamespace(CreateIdNamespaceRequest $args)
    {
        $result = parent::createIdNamespace($args->toArray());
        return new CreateIdNamespaceResponse($result->toArray());
    }
}
