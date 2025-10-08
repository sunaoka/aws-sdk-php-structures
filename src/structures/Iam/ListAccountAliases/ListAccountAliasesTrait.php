<?php

namespace Sunaoka\Aws\Structures\Iam\ListAccountAliases;

trait ListAccountAliasesTrait
{
    /**
     * @param ListAccountAliasesRequest $args
     * @return ListAccountAliasesResponse
     */
    public function listAccountAliases(ListAccountAliasesRequest $args)
    {
        $result = parent::listAccountAliases($args->toArray());
        return new ListAccountAliasesResponse($result->toArray());
    }
}
