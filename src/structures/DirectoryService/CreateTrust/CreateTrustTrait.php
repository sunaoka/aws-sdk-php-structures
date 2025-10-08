<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateTrust;

trait CreateTrustTrait
{
    /**
     * @param CreateTrustRequest $args
     * @return CreateTrustResponse
     */
    public function createTrust(CreateTrustRequest $args)
    {
        $result = parent::createTrust($args->toArray());
        return new CreateTrustResponse($result->toArray());
    }
}
