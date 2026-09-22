<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateDomain;

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
