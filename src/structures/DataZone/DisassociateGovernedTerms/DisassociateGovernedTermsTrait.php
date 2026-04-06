<?php

namespace Sunaoka\Aws\Structures\DataZone\DisassociateGovernedTerms;

trait DisassociateGovernedTermsTrait
{
    /**
     * @param DisassociateGovernedTermsRequest $args
     * @return DisassociateGovernedTermsResponse
     */
    public function disassociateGovernedTerms(DisassociateGovernedTermsRequest $args)
    {
        $result = parent::disassociateGovernedTerms($args->toArray());
        return new DisassociateGovernedTermsResponse($result->toArray());
    }
}
