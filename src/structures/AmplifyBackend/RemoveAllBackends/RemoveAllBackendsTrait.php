<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\RemoveAllBackends;

trait RemoveAllBackendsTrait
{
    /**
     * @param RemoveAllBackendsRequest $args
     * @return RemoveAllBackendsResponse
     */
    public function removeAllBackends(RemoveAllBackendsRequest $args)
    {
        $result = parent::removeAllBackends($args->toArray());
        return new RemoveAllBackendsResponse($result->toArray());
    }
}
