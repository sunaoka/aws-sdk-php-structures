<?php

namespace Sunaoka\Aws\Structures\Billing\ListContracts;

trait ListContractsTrait
{
    /**
     * @param ListContractsRequest $args
     * @return ListContractsResponse
     */
    public function listContracts(ListContractsRequest $args)
    {
        $result = parent::listContracts($args->toArray());
        return new ListContractsResponse($result->toArray());
    }
}
