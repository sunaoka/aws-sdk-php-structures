<?php

namespace Sunaoka\Aws\Structures\Route53Domains\AssociateDelegationSignerToDomain;

trait AssociateDelegationSignerToDomainTrait
{
    /**
     * @param AssociateDelegationSignerToDomainRequest $args
     * @return AssociateDelegationSignerToDomainResponse
     */
    public function associateDelegationSignerToDomain(AssociateDelegationSignerToDomainRequest $args)
    {
        $result = parent::associateDelegationSignerToDomain($args->toArray());
        return new AssociateDelegationSignerToDomainResponse($result->toArray());
    }
}
