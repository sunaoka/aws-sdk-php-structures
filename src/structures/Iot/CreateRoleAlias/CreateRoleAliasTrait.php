<?php

namespace Sunaoka\Aws\Structures\Iot\CreateRoleAlias;

trait CreateRoleAliasTrait
{
    /**
     * @param CreateRoleAliasRequest $args
     * @return CreateRoleAliasResponse
     */
    public function createRoleAlias(CreateRoleAliasRequest $args)
    {
        $result = parent::createRoleAlias($args->toArray());
        return new CreateRoleAliasResponse($result->toArray());
    }
}
