<?php

namespace Sunaoka\Aws\Structures\GameLift\ResolveAlias;

trait ResolveAliasTrait
{
    /**
     * @param ResolveAliasRequest $args
     * @return ResolveAliasResponse
     */
    public function resolveAlias(ResolveAliasRequest $args)
    {
        $result = parent::resolveAlias($args->toArray());
        return new ResolveAliasResponse($result->toArray());
    }
}
