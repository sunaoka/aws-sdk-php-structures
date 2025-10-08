<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutEmailIdentityDkimAttributes;

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
