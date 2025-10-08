<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\VoteOnProposal;

trait VoteOnProposalTrait
{
    /**
     * @param VoteOnProposalRequest $args
     * @return VoteOnProposalResponse
     */
    public function voteOnProposal(VoteOnProposalRequest $args)
    {
        $result = parent::voteOnProposal($args->toArray());
        return new VoteOnProposalResponse($result->toArray());
    }
}
