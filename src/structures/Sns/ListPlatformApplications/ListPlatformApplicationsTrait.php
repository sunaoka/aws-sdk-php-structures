<?php

namespace Sunaoka\Aws\Structures\Sns\ListPlatformApplications;

trait ListPlatformApplicationsTrait
{
    /**
     * @param ListPlatformApplicationsRequest $args
     * @return ListPlatformApplicationsResponse
     */
    public function listPlatformApplications(ListPlatformApplicationsRequest $args)
    {
        $result = parent::listPlatformApplications($args->toArray());
        return new ListPlatformApplicationsResponse($result->toArray());
    }
}
