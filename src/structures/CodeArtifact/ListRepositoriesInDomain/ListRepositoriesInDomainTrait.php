<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListRepositoriesInDomain;

trait ListRepositoriesInDomainTrait
{
    /**
     * @param ListRepositoriesInDomainRequest $args
     * @return ListRepositoriesInDomainResponse
     */
    public function listRepositoriesInDomain(ListRepositoriesInDomainRequest $args)
    {
        $result = parent::listRepositoriesInDomain($args->toArray());
        return new ListRepositoriesInDomainResponse($result->toArray());
    }
}
