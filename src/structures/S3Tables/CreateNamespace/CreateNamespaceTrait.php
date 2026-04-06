<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateNamespace;

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
