<?php

namespace Sunaoka\Aws\Structures\Signin\PutResourcePermissionStatement;

trait PutResourcePermissionStatementTrait
{
    /**
     * @param PutResourcePermissionStatementRequest $args
     * @return PutResourcePermissionStatementResponse
     */
    public function putResourcePermissionStatement(PutResourcePermissionStatementRequest $args)
    {
        $result = parent::putResourcePermissionStatement($args->toArray());
        return new PutResourcePermissionStatementResponse($result->toArray());
    }
}
