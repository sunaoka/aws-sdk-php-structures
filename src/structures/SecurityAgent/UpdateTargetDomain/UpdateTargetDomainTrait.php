<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateTargetDomain;

trait UpdateTargetDomainTrait
{
    /**
     * @param UpdateTargetDomainRequest $args
     * @return UpdateTargetDomainResponse
     */
    public function updateTargetDomain(UpdateTargetDomainRequest $args)
    {
        $result = parent::updateTargetDomain($args->toArray());
        return new UpdateTargetDomainResponse($result->toArray());
    }
}
