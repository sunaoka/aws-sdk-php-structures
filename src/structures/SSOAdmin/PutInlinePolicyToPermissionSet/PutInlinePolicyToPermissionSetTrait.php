<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutInlinePolicyToPermissionSet;

trait PutInlinePolicyToPermissionSetTrait
{
    /**
     * @param PutInlinePolicyToPermissionSetRequest $args
     * @return PutInlinePolicyToPermissionSetResponse
     */
    public function putInlinePolicyToPermissionSet(PutInlinePolicyToPermissionSetRequest $args)
    {
        $result = parent::putInlinePolicyToPermissionSet($args->toArray());
        return new PutInlinePolicyToPermissionSetResponse($result->toArray());
    }
}
