<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityDkimAttributes;

trait GetIdentityDkimAttributesTrait
{
    /**
     * @param GetIdentityDkimAttributesRequest $args
     * @return GetIdentityDkimAttributesResponse
     */
    public function getIdentityDkimAttributes(GetIdentityDkimAttributesRequest $args)
    {
        $result = parent::getIdentityDkimAttributes($args->toArray());
        return new GetIdentityDkimAttributesResponse($result->toArray());
    }
}
