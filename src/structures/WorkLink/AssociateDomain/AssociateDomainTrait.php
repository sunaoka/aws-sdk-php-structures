<?php

namespace Sunaoka\Aws\Structures\WorkLink\AssociateDomain;

trait AssociateDomainTrait
{
    /**
     * @param AssociateDomainRequest $args
     * @return AssociateDomainResponse
     */
    public function associateDomain(AssociateDomainRequest $args)
    {
        $result = parent::associateDomain($args->toArray());
        return new AssociateDomainResponse($result->toArray());
    }
}
