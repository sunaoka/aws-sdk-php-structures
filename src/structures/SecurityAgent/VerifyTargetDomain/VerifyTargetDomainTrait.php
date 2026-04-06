<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\VerifyTargetDomain;

trait VerifyTargetDomainTrait
{
    /**
     * @param VerifyTargetDomainRequest $args
     * @return VerifyTargetDomainResponse
     */
    public function verifyTargetDomain(VerifyTargetDomainRequest $args)
    {
        $result = parent::verifyTargetDomain($args->toArray());
        return new VerifyTargetDomainResponse($result->toArray());
    }
}
