<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ProvisionPermissionSet;

trait ProvisionPermissionSetTrait
{
    /**
     * @param ProvisionPermissionSetRequest $args
     * @return ProvisionPermissionSetResponse
     */
    public function provisionPermissionSet(ProvisionPermissionSetRequest $args)
    {
        $result = parent::provisionPermissionSet($args->toArray());
        return new ProvisionPermissionSetResponse($result->toArray());
    }
}
