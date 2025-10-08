<?php

namespace Sunaoka\Aws\Structures\AppRegistry\SyncResource;

trait SyncResourceTrait
{
    /**
     * @param SyncResourceRequest $args
     * @return SyncResourceResponse
     */
    public function syncResource(SyncResourceRequest $args)
    {
        $result = parent::syncResource($args->toArray());
        return new SyncResourceResponse($result->toArray());
    }
}
