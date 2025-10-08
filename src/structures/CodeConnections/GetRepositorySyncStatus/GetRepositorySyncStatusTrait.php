<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetRepositorySyncStatus;

trait GetRepositorySyncStatusTrait
{
    /**
     * @param GetRepositorySyncStatusRequest $args
     * @return GetRepositorySyncStatusResponse
     */
    public function getRepositorySyncStatus(GetRepositorySyncStatusRequest $args)
    {
        $result = parent::getRepositorySyncStatus($args->toArray());
        return new GetRepositorySyncStatusResponse($result->toArray());
    }
}
