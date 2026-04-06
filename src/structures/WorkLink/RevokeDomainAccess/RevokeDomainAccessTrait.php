<?php

namespace Sunaoka\Aws\Structures\WorkLink\RevokeDomainAccess;

trait RevokeDomainAccessTrait
{
    /**
     * @param RevokeDomainAccessRequest $args
     * @return RevokeDomainAccessResponse
     */
    public function revokeDomainAccess(RevokeDomainAccessRequest $args)
    {
        $result = parent::revokeDomainAccess($args->toArray());
        return new RevokeDomainAccessResponse($result->toArray());
    }
}
