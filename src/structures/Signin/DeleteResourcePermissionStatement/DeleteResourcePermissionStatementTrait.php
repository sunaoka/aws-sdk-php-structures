<?php

namespace Sunaoka\Aws\Structures\Signin\DeleteResourcePermissionStatement;

trait DeleteResourcePermissionStatementTrait
{
    /**
     * @param DeleteResourcePermissionStatementRequest $args
     * @return DeleteResourcePermissionStatementResponse
     */
    public function deleteResourcePermissionStatement(DeleteResourcePermissionStatementRequest $args)
    {
        $result = parent::deleteResourcePermissionStatement($args->toArray());
        return new DeleteResourcePermissionStatementResponse($result->toArray());
    }
}
