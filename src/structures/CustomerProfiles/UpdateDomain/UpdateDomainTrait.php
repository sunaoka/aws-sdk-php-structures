<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomain;

trait UpdateDomainTrait
{
    /**
     * @param UpdateDomainRequest $args
     * @return UpdateDomainResponse
     */
    public function updateDomain(UpdateDomainRequest $args)
    {
        $result = parent::updateDomain($args->toArray());
        return new UpdateDomainResponse($result->toArray());
    }
}
