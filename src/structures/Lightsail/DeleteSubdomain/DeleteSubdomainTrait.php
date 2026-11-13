<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteSubdomain;

trait DeleteSubdomainTrait
{
    /**
     * @param DeleteSubdomainRequest $args
     * @return DeleteSubdomainResponse
     */
    public function deleteSubdomain(DeleteSubdomainRequest $args)
    {
        $result = parent::deleteSubdomain($args->toArray());
        return new DeleteSubdomainResponse($result->toArray());
    }
}
