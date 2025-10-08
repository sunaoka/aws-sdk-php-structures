<?php

namespace Sunaoka\Aws\Structures\SupplyChain\DeleteDataLakeNamespace;

trait DeleteDataLakeNamespaceTrait
{
    /**
     * @param DeleteDataLakeNamespaceRequest $args
     * @return DeleteDataLakeNamespaceResponse
     */
    public function deleteDataLakeNamespace(DeleteDataLakeNamespaceRequest $args)
    {
        $result = parent::deleteDataLakeNamespace($args->toArray());
        return new DeleteDataLakeNamespaceResponse($result->toArray());
    }
}
