<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConflictingAliases;

trait ListConflictingAliasesTrait
{
    /**
     * @param ListConflictingAliasesRequest $args
     * @return ListConflictingAliasesResponse
     */
    public function listConflictingAliases(ListConflictingAliasesRequest $args)
    {
        $result = parent::listConflictingAliases($args->toArray());
        return new ListConflictingAliasesResponse($result->toArray());
    }
}
