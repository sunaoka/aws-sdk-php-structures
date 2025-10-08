<?php

namespace Sunaoka\Aws\Structures\Macie2\GetClassificationScope;

trait GetClassificationScopeTrait
{
    /**
     * @param GetClassificationScopeRequest $args
     * @return GetClassificationScopeResponse
     */
    public function getClassificationScope(GetClassificationScopeRequest $args)
    {
        $result = parent::getClassificationScope($args->toArray());
        return new GetClassificationScopeResponse($result->toArray());
    }
}
