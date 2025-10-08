<?php

namespace Sunaoka\Aws\Structures\SupportApp\GetAccountAlias;

trait GetAccountAliasTrait
{
    /**
     * @param GetAccountAliasRequest $args
     * @return GetAccountAliasResponse
     */
    public function getAccountAlias(GetAccountAliasRequest $args)
    {
        $result = parent::getAccountAlias($args->toArray());
        return new GetAccountAliasResponse($result->toArray());
    }
}
