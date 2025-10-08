<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataLakeNamespace;

trait GetDataLakeNamespaceTrait
{
    /**
     * @param GetDataLakeNamespaceRequest $args
     * @return GetDataLakeNamespaceResponse
     */
    public function getDataLakeNamespace(GetDataLakeNamespaceRequest $args)
    {
        $result = parent::getDataLakeNamespace($args->toArray());
        return new GetDataLakeNamespaceResponse($result->toArray());
    }
}
