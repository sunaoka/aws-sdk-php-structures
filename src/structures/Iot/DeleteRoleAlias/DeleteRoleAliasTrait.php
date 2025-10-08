<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteRoleAlias;

trait DeleteRoleAliasTrait
{
    /**
     * @param DeleteRoleAliasRequest $args
     * @return DeleteRoleAliasResponse
     */
    public function deleteRoleAlias(DeleteRoleAliasRequest $args)
    {
        $result = parent::deleteRoleAlias($args->toArray());
        return new DeleteRoleAliasResponse($result->toArray());
    }
}
