<?php

namespace Sunaoka\Aws\Structures\Route53Domains\RestoreDomain;

trait RestoreDomainTrait
{
    /**
     * @param RestoreDomainRequest $args
     * @return RestoreDomainResponse
     */
    public function restoreDomain(RestoreDomainRequest $args)
    {
        $result = parent::restoreDomain($args->toArray());
        return new RestoreDomainResponse($result->toArray());
    }
}
