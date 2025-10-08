<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointScope;

trait GetAccessPointScopeTrait
{
    /**
     * @param GetAccessPointScopeRequest $args
     * @return GetAccessPointScopeResponse
     */
    public function getAccessPointScope(GetAccessPointScopeRequest $args)
    {
        $result = parent::getAccessPointScope($args->toArray());
        return new GetAccessPointScopeResponse($result->toArray());
    }
}
