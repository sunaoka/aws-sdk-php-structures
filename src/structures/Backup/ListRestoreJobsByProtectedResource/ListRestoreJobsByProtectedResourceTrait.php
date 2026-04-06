<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobsByProtectedResource;

trait ListRestoreJobsByProtectedResourceTrait
{
    /**
     * @param ListRestoreJobsByProtectedResourceRequest $args
     * @return ListRestoreJobsByProtectedResourceResponse
     */
    public function listRestoreJobsByProtectedResource(ListRestoreJobsByProtectedResourceRequest $args)
    {
        $result = parent::listRestoreJobsByProtectedResource($args->toArray());
        return new ListRestoreJobsByProtectedResourceResponse($result->toArray());
    }
}
