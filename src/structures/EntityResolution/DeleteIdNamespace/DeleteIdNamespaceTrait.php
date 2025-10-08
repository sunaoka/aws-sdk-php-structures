<?php

namespace Sunaoka\Aws\Structures\EntityResolution\DeleteIdNamespace;

trait DeleteIdNamespaceTrait
{
    /**
     * @param DeleteIdNamespaceRequest $args
     * @return DeleteIdNamespaceResponse
     */
    public function deleteIdNamespace(DeleteIdNamespaceRequest $args)
    {
        $result = parent::deleteIdNamespace($args->toArray());
        return new DeleteIdNamespaceResponse($result->toArray());
    }
}
