<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataLakeNamespace;

trait CreateDataLakeNamespaceTrait
{
    /**
     * @param CreateDataLakeNamespaceRequest $args
     * @return CreateDataLakeNamespaceResponse
     */
    public function createDataLakeNamespace(CreateDataLakeNamespaceRequest $args)
    {
        $result = parent::createDataLakeNamespace($args->toArray());
        return new CreateDataLakeNamespaceResponse($result->toArray());
    }
}
