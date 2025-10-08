<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateProposal;

trait CreateProposalTrait
{
    /**
     * @param CreateProposalRequest $args
     * @return CreateProposalResponse
     */
    public function createProposal(CreateProposalRequest $args)
    {
        $result = parent::createProposal($args->toArray());
        return new CreateProposalResponse($result->toArray());
    }
}
