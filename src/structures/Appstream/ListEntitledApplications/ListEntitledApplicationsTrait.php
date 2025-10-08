<?php

namespace Sunaoka\Aws\Structures\Appstream\ListEntitledApplications;

trait ListEntitledApplicationsTrait
{
    /**
     * @param ListEntitledApplicationsRequest $args
     * @return ListEntitledApplicationsResponse
     */
    public function listEntitledApplications(ListEntitledApplicationsRequest $args)
    {
        $result = parent::listEntitledApplications($args->toArray());
        return new ListEntitledApplicationsResponse($result->toArray());
    }
}
