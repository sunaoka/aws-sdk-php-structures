<?php

namespace Sunaoka\Aws\Structures\Interconnect\AcceptConnectionProposal;

trait AcceptConnectionProposalTrait
{
    /**
     * @param AcceptConnectionProposalRequest $args
     * @return AcceptConnectionProposalResponse
     */
    public function acceptConnectionProposal(AcceptConnectionProposalRequest $args)
    {
        $result = parent::acceptConnectionProposal($args->toArray());
        return new AcceptConnectionProposalResponse($result->toArray());
    }
}
