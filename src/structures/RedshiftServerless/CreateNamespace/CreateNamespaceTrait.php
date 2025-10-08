<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateNamespace;

trait CreateNamespaceTrait
{
    /**
     * @param CreateNamespaceRequest $args
     * @return CreateNamespaceResponse
     */
    public function createNamespace(CreateNamespaceRequest $args)
    {
        $result = parent::createNamespace($args->toArray());
        return new CreateNamespaceResponse($result->toArray());
    }
}
