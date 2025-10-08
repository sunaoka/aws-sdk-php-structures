<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataLakeNamespaces;

trait ListDataLakeNamespacesTrait
{
    /**
     * @param ListDataLakeNamespacesRequest $args
     * @return ListDataLakeNamespacesResponse
     */
    public function listDataLakeNamespaces(ListDataLakeNamespacesRequest $args)
    {
        $result = parent::listDataLakeNamespaces($args->toArray());
        return new ListDataLakeNamespacesResponse($result->toArray());
    }
}
