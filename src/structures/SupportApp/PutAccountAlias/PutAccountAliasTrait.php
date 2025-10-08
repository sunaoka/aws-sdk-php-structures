<?php

namespace Sunaoka\Aws\Structures\SupportApp\PutAccountAlias;

trait PutAccountAliasTrait
{
    /**
     * @param PutAccountAliasRequest $args
     * @return PutAccountAliasResponse
     */
    public function putAccountAlias(PutAccountAliasRequest $args)
    {
        $result = parent::putAccountAlias($args->toArray());
        return new PutAccountAliasResponse($result->toArray());
    }
}
