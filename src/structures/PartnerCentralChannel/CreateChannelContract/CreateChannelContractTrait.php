<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelContract;

trait CreateChannelContractTrait
{
    /**
     * @param CreateChannelContractRequest $args
     * @return CreateChannelContractResponse
     */
    public function createChannelContract(CreateChannelContractRequest $args)
    {
        $result = parent::createChannelContract($args->toArray());
        return new CreateChannelContractResponse($result->toArray());
    }
}
