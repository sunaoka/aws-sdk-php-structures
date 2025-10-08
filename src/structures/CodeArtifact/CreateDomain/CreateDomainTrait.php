<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CreateDomain;

trait CreateDomainTrait
{
    /**
     * @param CreateDomainRequest $args
     * @return CreateDomainResponse
     */
    public function createDomain(CreateDomainRequest $args)
    {
        $result = parent::createDomain($args->toArray());
        return new CreateDomainResponse($result->toArray());
    }
}
