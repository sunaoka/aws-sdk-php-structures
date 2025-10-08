<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityDkimAttributes;

trait PutEmailIdentityDkimAttributesTrait
{
    /**
     * @param PutEmailIdentityDkimAttributesRequest $args
     * @return PutEmailIdentityDkimAttributesResponse
     */
    public function putEmailIdentityDkimAttributes(PutEmailIdentityDkimAttributesRequest $args)
    {
        $result = parent::putEmailIdentityDkimAttributes($args->toArray());
        return new PutEmailIdentityDkimAttributesResponse($result->toArray());
    }
}
