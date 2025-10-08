<?php

namespace Sunaoka\Aws\Structures\StorageGateway\JoinDomain;

trait JoinDomainTrait
{
    /**
     * @param JoinDomainRequest $args
     * @return JoinDomainResponse
     */
    public function joinDomain(JoinDomainRequest $args)
    {
        $result = parent::joinDomain($args->toArray());
        return new JoinDomainResponse($result->toArray());
    }
}
