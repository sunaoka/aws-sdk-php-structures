<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminUpdateUserAttributes;

trait AdminUpdateUserAttributesTrait
{
    /**
     * @param AdminUpdateUserAttributesRequest $args
     * @return AdminUpdateUserAttributesResponse
     */
    public function adminUpdateUserAttributes(AdminUpdateUserAttributesRequest $args)
    {
        $result = parent::adminUpdateUserAttributes($args->toArray());
        return new AdminUpdateUserAttributesResponse($result->toArray());
    }
}
