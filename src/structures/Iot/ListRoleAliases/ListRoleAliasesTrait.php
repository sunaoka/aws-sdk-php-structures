<?php

namespace Sunaoka\Aws\Structures\Iot\ListRoleAliases;

trait ListRoleAliasesTrait
{
    /**
     * @param ListRoleAliasesRequest $args
     * @return ListRoleAliasesResponse
     */
    public function listRoleAliases(ListRoleAliasesRequest $args)
    {
        $result = parent::listRoleAliases($args->toArray());
        return new ListRoleAliasesResponse($result->toArray());
    }
}
