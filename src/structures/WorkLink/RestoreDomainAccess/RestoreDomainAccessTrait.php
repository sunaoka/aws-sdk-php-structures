<?php

namespace Sunaoka\Aws\Structures\WorkLink\RestoreDomainAccess;

trait RestoreDomainAccessTrait
{
    /**
     * @param RestoreDomainAccessRequest $args
     * @return RestoreDomainAccessResponse
     */
    public function restoreDomainAccess(RestoreDomainAccessRequest $args)
    {
        $result = parent::restoreDomainAccess($args->toArray());
        return new RestoreDomainAccessResponse($result->toArray());
    }
}
