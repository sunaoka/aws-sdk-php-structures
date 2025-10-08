<?php

namespace Sunaoka\Aws\Structures\WorkMail\AssociateDelegateToResource;

trait AssociateDelegateToResourceTrait
{
    /**
     * @param AssociateDelegateToResourceRequest $args
     * @return AssociateDelegateToResourceResponse
     */
    public function associateDelegateToResource(AssociateDelegateToResourceRequest $args)
    {
        $result = parent::associateDelegateToResource($args->toArray());
        return new AssociateDelegateToResourceResponse($result->toArray());
    }
}
