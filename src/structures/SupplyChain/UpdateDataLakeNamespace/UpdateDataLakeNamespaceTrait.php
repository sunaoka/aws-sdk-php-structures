<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataLakeNamespace;

trait UpdateDataLakeNamespaceTrait
{
    /**
     * @param UpdateDataLakeNamespaceRequest $args
     * @return UpdateDataLakeNamespaceResponse
     */
    public function updateDataLakeNamespace(UpdateDataLakeNamespaceRequest $args)
    {
        $result = parent::updateDataLakeNamespace($args->toArray());
        return new UpdateDataLakeNamespaceResponse($result->toArray());
    }
}
