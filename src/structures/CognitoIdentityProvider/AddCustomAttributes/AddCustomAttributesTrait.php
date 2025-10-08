<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AddCustomAttributes;

trait AddCustomAttributesTrait
{
    /**
     * @param AddCustomAttributesRequest $args
     * @return AddCustomAttributesResponse
     */
    public function addCustomAttributes(AddCustomAttributesRequest $args)
    {
        $result = parent::addCustomAttributes($args->toArray());
        return new AddCustomAttributesResponse($result->toArray());
    }
}
