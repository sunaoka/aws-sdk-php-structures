<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityDkimSigningAttributes;

trait PutEmailIdentityDkimSigningAttributesTrait
{
    /**
     * @param PutEmailIdentityDkimSigningAttributesRequest $args
     * @return PutEmailIdentityDkimSigningAttributesResponse
     */
    public function putEmailIdentityDkimSigningAttributes(PutEmailIdentityDkimSigningAttributesRequest $args)
    {
        $result = parent::putEmailIdentityDkimSigningAttributes($args->toArray());
        return new PutEmailIdentityDkimSigningAttributesResponse($result->toArray());
    }
}
