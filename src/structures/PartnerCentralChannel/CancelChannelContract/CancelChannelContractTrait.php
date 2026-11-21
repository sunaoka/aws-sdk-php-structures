<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CancelChannelContract;

trait CancelChannelContractTrait
{
    /**
     * @param CancelChannelContractRequest $args
     * @return CancelChannelContractResponse
     */
    public function cancelChannelContract(CancelChannelContractRequest $args)
    {
        $result = parent::cancelChannelContract($args->toArray());
        return new CancelChannelContractResponse($result->toArray());
    }
}
