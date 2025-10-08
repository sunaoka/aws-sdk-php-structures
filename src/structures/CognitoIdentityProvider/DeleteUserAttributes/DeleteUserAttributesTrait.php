<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserAttributes;

trait DeleteUserAttributesTrait
{
    /**
     * @param DeleteUserAttributesRequest $args
     * @return DeleteUserAttributesResponse
     */
    public function deleteUserAttributes(DeleteUserAttributesRequest $args)
    {
        $result = parent::deleteUserAttributes($args->toArray());
        return new DeleteUserAttributesResponse($result->toArray());
    }
}
