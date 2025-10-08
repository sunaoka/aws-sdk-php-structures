<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityMailFromDomain;

trait SetIdentityMailFromDomainTrait
{
    /**
     * @param SetIdentityMailFromDomainRequest $args
     * @return SetIdentityMailFromDomainResponse
     */
    public function setIdentityMailFromDomain(SetIdentityMailFromDomainRequest $args)
    {
        $result = parent::setIdentityMailFromDomain($args->toArray());
        return new SetIdentityMailFromDomainResponse($result->toArray());
    }
}
