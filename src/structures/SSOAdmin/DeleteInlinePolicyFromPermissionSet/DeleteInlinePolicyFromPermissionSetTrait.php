<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteInlinePolicyFromPermissionSet;

trait DeleteInlinePolicyFromPermissionSetTrait
{
    /**
     * @param DeleteInlinePolicyFromPermissionSetRequest $args
     * @return DeleteInlinePolicyFromPermissionSetResponse
     */
    public function deleteInlinePolicyFromPermissionSet(DeleteInlinePolicyFromPermissionSetRequest $args)
    {
        $result = parent::deleteInlinePolicyFromPermissionSet($args->toArray());
        return new DeleteInlinePolicyFromPermissionSetResponse($result->toArray());
    }
}
