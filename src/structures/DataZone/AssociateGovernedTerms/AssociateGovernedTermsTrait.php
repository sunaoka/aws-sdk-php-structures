<?php

namespace Sunaoka\Aws\Structures\DataZone\AssociateGovernedTerms;

trait AssociateGovernedTermsTrait
{
    /**
     * @param AssociateGovernedTermsRequest $args
     * @return AssociateGovernedTermsResponse
     */
    public function associateGovernedTerms(AssociateGovernedTermsRequest $args)
    {
        $result = parent::associateGovernedTerms($args->toArray());
        return new AssociateGovernedTermsResponse($result->toArray());
    }
}
