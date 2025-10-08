<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListProposals;

trait ListProposalsTrait
{
    /**
     * @param ListProposalsRequest $args
     * @return ListProposalsResponse
     */
    public function listProposals(ListProposalsRequest $args)
    {
        $result = parent::listProposals($args->toArray());
        return new ListProposalsResponse($result->toArray());
    }
}
