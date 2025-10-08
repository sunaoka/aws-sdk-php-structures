<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CloneBackend;

trait CloneBackendTrait
{
    /**
     * @param CloneBackendRequest $args
     * @return CloneBackendResponse
     */
    public function cloneBackend(CloneBackendRequest $args)
    {
        $result = parent::cloneBackend($args->toArray());
        return new CloneBackendResponse($result->toArray());
    }
}
