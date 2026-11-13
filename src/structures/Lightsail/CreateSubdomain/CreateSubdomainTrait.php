<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateSubdomain;

trait CreateSubdomainTrait
{
    /**
     * @param CreateSubdomainRequest $args
     * @return CreateSubdomainResponse
     */
    public function createSubdomain(CreateSubdomainRequest $args)
    {
        $result = parent::createSubdomain($args->toArray());
        return new CreateSubdomainResponse($result->toArray());
    }
}
