<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateDomainNameservers;

trait UpdateDomainNameserversTrait
{
    /**
     * @param UpdateDomainNameserversRequest $args
     * @return UpdateDomainNameserversResponse
     */
    public function updateDomainNameservers(UpdateDomainNameserversRequest $args)
    {
        $result = parent::updateDomainNameservers($args->toArray());
        return new UpdateDomainNameserversResponse($result->toArray());
    }
}
