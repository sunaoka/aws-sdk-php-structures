<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityMailFromDomainAttributes;

trait GetIdentityMailFromDomainAttributesTrait
{
    /**
     * @param GetIdentityMailFromDomainAttributesRequest $args
     * @return GetIdentityMailFromDomainAttributesResponse
     */
    public function getIdentityMailFromDomainAttributes(GetIdentityMailFromDomainAttributesRequest $args)
    {
        $result = parent::getIdentityMailFromDomainAttributes($args->toArray());
        return new GetIdentityMailFromDomainAttributesResponse($result->toArray());
    }
}
