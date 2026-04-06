<?php

namespace Sunaoka\Aws\Structures\WorkLink\DisassociateDomain;

trait DisassociateDomainTrait
{
    /**
     * @param DisassociateDomainRequest $args
     * @return DisassociateDomainResponse
     */
    public function disassociateDomain(DisassociateDomainRequest $args)
    {
        $result = parent::disassociateDomain($args->toArray());
        return new DisassociateDomainResponse($result->toArray());
    }
}
