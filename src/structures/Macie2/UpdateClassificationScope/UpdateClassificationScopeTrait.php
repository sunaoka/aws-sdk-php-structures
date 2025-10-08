<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateClassificationScope;

trait UpdateClassificationScopeTrait
{
    /**
     * @param UpdateClassificationScopeRequest $args
     * @return UpdateClassificationScopeResponse
     */
    public function updateClassificationScope(UpdateClassificationScopeRequest $args)
    {
        $result = parent::updateClassificationScope($args->toArray());
        return new UpdateClassificationScopeResponse($result->toArray());
    }
}
