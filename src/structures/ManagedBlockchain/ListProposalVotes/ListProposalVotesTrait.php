<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListProposalVotes;

trait ListProposalVotesTrait
{
    /**
     * @param ListProposalVotesRequest $args
     * @return ListProposalVotesResponse
     */
    public function listProposalVotes(ListProposalVotesRequest $args)
    {
        $result = parent::listProposalVotes($args->toArray());
        return new ListProposalVotesResponse($result->toArray());
    }
}
