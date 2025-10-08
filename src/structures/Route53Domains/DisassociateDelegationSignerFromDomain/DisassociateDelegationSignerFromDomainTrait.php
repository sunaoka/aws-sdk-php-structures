<?php

namespace Sunaoka\Aws\Structures\Route53Domains\DisassociateDelegationSignerFromDomain;

trait DisassociateDelegationSignerFromDomainTrait
{
    /**
     * @param DisassociateDelegationSignerFromDomainRequest $args
     * @return DisassociateDelegationSignerFromDomainResponse
     */
    public function disassociateDelegationSignerFromDomain(DisassociateDelegationSignerFromDomainRequest $args)
    {
        $result = parent::disassociateDelegationSignerFromDomain($args->toArray());
        return new DisassociateDelegationSignerFromDomainResponse($result->toArray());
    }
}
