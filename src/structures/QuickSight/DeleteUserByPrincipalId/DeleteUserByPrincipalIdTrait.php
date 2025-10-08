<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteUserByPrincipalId;

trait DeleteUserByPrincipalIdTrait
{
    /**
     * @param DeleteUserByPrincipalIdRequest $args
     * @return DeleteUserByPrincipalIdResponse
     */
    public function deleteUserByPrincipalId(DeleteUserByPrincipalIdRequest $args)
    {
        $result = parent::deleteUserByPrincipalId($args->toArray());
        return new DeleteUserByPrincipalIdResponse($result->toArray());
    }
}
