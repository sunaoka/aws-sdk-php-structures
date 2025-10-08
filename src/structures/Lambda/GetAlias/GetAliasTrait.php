<?php

namespace Sunaoka\Aws\Structures\Lambda\GetAlias;

trait GetAliasTrait
{
    /**
     * @param GetAliasRequest $args
     * @return GetAliasResponse
     */
    public function getAlias(GetAliasRequest $args)
    {
        $result = parent::getAlias($args->toArray());
        return new GetAliasResponse($result->toArray());
    }
}
