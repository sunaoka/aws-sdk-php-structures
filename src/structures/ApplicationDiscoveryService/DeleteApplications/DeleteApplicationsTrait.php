<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DeleteApplications;

trait DeleteApplicationsTrait
{
    /**
     * @param DeleteApplicationsRequest $args
     * @return DeleteApplicationsResponse
     */
    public function deleteApplications(DeleteApplicationsRequest $args)
    {
        $result = parent::deleteApplications($args->toArray());
        return new DeleteApplicationsResponse($result->toArray());
    }
}
