<?php

namespace Sunaoka\Aws\Structures\AppRunner\DisassociateCustomDomain;

trait DisassociateCustomDomainTrait
{
    /**
     * @param DisassociateCustomDomainRequest $args
     * @return DisassociateCustomDomainResponse
     */
    public function disassociateCustomDomain(DisassociateCustomDomainRequest $args)
    {
        $result = parent::disassociateCustomDomain($args->toArray());
        return new DisassociateCustomDomainResponse($result->toArray());
    }
}
