<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeleteDomain;

trait DeleteDomainTrait
{
    /**
     * @param DeleteDomainRequest $args
     * @return DeleteDomainResponse
     */
    public function deleteDomain(DeleteDomainRequest $args)
    {
        $result = parent::deleteDomain($args->toArray());
        return new DeleteDomainResponse($result->toArray());
    }
}
