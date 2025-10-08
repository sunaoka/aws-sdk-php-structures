<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeregisterMailDomain;

trait DeregisterMailDomainTrait
{
    /**
     * @param DeregisterMailDomainRequest $args
     * @return DeregisterMailDomainResponse
     */
    public function deregisterMailDomain(DeregisterMailDomainRequest $args)
    {
        $result = parent::deregisterMailDomain($args->toArray());
        return new DeregisterMailDomainResponse($result->toArray());
    }
}
