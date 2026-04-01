<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateTargetDomain;

trait CreateTargetDomainTrait
{
    /**
     * @param CreateTargetDomainRequest $args
     * @return CreateTargetDomainResponse
     */
    public function createTargetDomain(CreateTargetDomainRequest $args)
    {
        $result = parent::createTargetDomain($args->toArray());
        return new CreateTargetDomainResponse($result->toArray());
    }
}
