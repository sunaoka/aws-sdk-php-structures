<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateRoleAlias;

trait UpdateRoleAliasTrait
{
    /**
     * @param UpdateRoleAliasRequest $args
     * @return UpdateRoleAliasResponse
     */
    public function updateRoleAlias(UpdateRoleAliasRequest $args)
    {
        $result = parent::updateRoleAlias($args->toArray());
        return new UpdateRoleAliasResponse($result->toArray());
    }
}
