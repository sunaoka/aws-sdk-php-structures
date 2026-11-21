<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\GetChannelContract;

trait GetChannelContractTrait
{
    /**
     * @param GetChannelContractRequest $args
     * @return GetChannelContractResponse
     */
    public function getChannelContract(GetChannelContractRequest $args)
    {
        $result = parent::getChannelContract($args->toArray());
        return new GetChannelContractResponse($result->toArray());
    }
}
