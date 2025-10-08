<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationScopes;

trait ListClassificationScopesTrait
{
    /**
     * @param ListClassificationScopesRequest $args
     * @return ListClassificationScopesResponse
     */
    public function listClassificationScopes(ListClassificationScopesRequest $args)
    {
        $result = parent::listClassificationScopes($args->toArray());
        return new ListClassificationScopesResponse($result->toArray());
    }
}
