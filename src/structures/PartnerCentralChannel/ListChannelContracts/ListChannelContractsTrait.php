<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelContracts;

trait ListChannelContractsTrait
{
    /**
     * @param ListChannelContractsRequest $args
     * @return ListChannelContractsResponse
     */
    public function listChannelContracts(ListChannelContractsRequest $args)
    {
        $result = parent::listChannelContracts($args->toArray());
        return new ListChannelContractsResponse($result->toArray());
    }
}
