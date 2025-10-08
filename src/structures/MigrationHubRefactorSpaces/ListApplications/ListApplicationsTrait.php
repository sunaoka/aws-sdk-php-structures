<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListApplications;

trait ListApplicationsTrait
{
    /**
     * @param ListApplicationsRequest $args
     * @return ListApplicationsResponse
     */
    public function listApplications(ListApplicationsRequest $args)
    {
        $result = parent::listApplications($args->toArray());
        return new ListApplicationsResponse($result->toArray());
    }
}
