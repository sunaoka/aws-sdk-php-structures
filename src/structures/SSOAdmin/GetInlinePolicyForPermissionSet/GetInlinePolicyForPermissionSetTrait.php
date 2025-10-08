<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetInlinePolicyForPermissionSet;

trait GetInlinePolicyForPermissionSetTrait
{
    /**
     * @param GetInlinePolicyForPermissionSetRequest $args
     * @return GetInlinePolicyForPermissionSetResponse
     */
    public function getInlinePolicyForPermissionSet(GetInlinePolicyForPermissionSetRequest $args)
    {
        $result = parent::getInlinePolicyForPermissionSet($args->toArray());
        return new GetInlinePolicyForPermissionSetResponse($result->toArray());
    }
}
