<?php

namespace Sunaoka\Aws\Structures\Signin\ListResourcePermissionStatements;

trait ListResourcePermissionStatementsTrait
{
    /**
     * @param ListResourcePermissionStatementsRequest $args
     * @return ListResourcePermissionStatementsResponse
     */
    public function listResourcePermissionStatements(ListResourcePermissionStatementsRequest $args)
    {
        $result = parent::listResourcePermissionStatements($args->toArray());
        return new ListResourcePermissionStatementsResponse($result->toArray());
    }
}
