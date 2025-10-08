<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityVerificationAttributes;

trait GetIdentityVerificationAttributesTrait
{
    /**
     * @param GetIdentityVerificationAttributesRequest $args
     * @return GetIdentityVerificationAttributesResponse
     */
    public function getIdentityVerificationAttributes(GetIdentityVerificationAttributesRequest $args)
    {
        $result = parent::getIdentityVerificationAttributes($args->toArray());
        return new GetIdentityVerificationAttributesResponse($result->toArray());
    }
}
