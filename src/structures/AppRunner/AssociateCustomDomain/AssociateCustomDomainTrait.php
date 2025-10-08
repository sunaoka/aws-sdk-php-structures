<?php

namespace Sunaoka\Aws\Structures\AppRunner\AssociateCustomDomain;

trait AssociateCustomDomainTrait
{
    /**
     * @param AssociateCustomDomainRequest $args
     * @return AssociateCustomDomainResponse
     */
    public function associateCustomDomain(AssociateCustomDomainRequest $args)
    {
        $result = parent::associateCustomDomain($args->toArray());
        return new AssociateCustomDomainResponse($result->toArray());
    }
}
