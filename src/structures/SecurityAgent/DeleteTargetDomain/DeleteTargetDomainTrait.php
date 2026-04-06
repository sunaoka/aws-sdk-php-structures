<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteTargetDomain;

trait DeleteTargetDomainTrait
{
    /**
     * @param DeleteTargetDomainRequest $args
     * @return DeleteTargetDomainResponse
     */
    public function deleteTargetDomain(DeleteTargetDomainRequest $args)
    {
        $result = parent::deleteTargetDomain($args->toArray());
        return new DeleteTargetDomainResponse($result->toArray());
    }
}
