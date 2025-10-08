<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserAttributes;

trait UpdateUserAttributesTrait
{
    /**
     * @param UpdateUserAttributesRequest $args
     * @return UpdateUserAttributesResponse
     */
    public function updateUserAttributes(UpdateUserAttributesRequest $args)
    {
        $result = parent::updateUserAttributes($args->toArray());
        return new UpdateUserAttributesResponse($result->toArray());
    }
}
