<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDeleteUserAttributes;

trait AdminDeleteUserAttributesTrait
{
    /**
     * @param AdminDeleteUserAttributesRequest $args
     * @return AdminDeleteUserAttributesResponse
     */
    public function adminDeleteUserAttributes(AdminDeleteUserAttributesRequest $args)
    {
        $result = parent::adminDeleteUserAttributes($args->toArray());
        return new AdminDeleteUserAttributesResponse($result->toArray());
    }
}
