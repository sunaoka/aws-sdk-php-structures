<?php

namespace Sunaoka\Aws\Structures\Lambda\ListAliases;

trait ListAliasesTrait
{
    /**
     * @param ListAliasesRequest $args
     * @return ListAliasesResponse
     */
    public function listAliases(ListAliasesRequest $args)
    {
        $result = parent::listAliases($args->toArray());
        return new ListAliasesResponse($result->toArray());
    }
}
