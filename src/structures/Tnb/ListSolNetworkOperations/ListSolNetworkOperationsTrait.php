<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolNetworkOperations;

trait ListSolNetworkOperationsTrait
{
    /**
     * @param ListSolNetworkOperationsRequest $args
     * @return ListSolNetworkOperationsResponse
     */
    public function listSolNetworkOperations(ListSolNetworkOperationsRequest $args)
    {
        $result = parent::listSolNetworkOperations($args->toArray());
        return new ListSolNetworkOperationsResponse($result->toArray());
    }
}
