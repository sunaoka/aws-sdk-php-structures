<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetProposal;

trait GetProposalTrait
{
    /**
     * @param GetProposalRequest $args
     * @return GetProposalResponse
     */
    public function getProposal(GetProposalRequest $args)
    {
        $result = parent::getProposal($args->toArray());
        return new GetProposalResponse($result->toArray());
    }
}
