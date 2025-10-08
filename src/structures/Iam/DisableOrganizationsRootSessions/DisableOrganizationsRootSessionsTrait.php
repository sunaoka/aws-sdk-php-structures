<?php

namespace Sunaoka\Aws\Structures\Iam\DisableOrganizationsRootSessions;

trait DisableOrganizationsRootSessionsTrait
{
    /**
     * @param DisableOrganizationsRootSessionsRequest $args
     * @return DisableOrganizationsRootSessionsResponse
     */
    public function disableOrganizationsRootSessions(DisableOrganizationsRootSessionsRequest $args)
    {
        $result = parent::disableOrganizationsRootSessions($args->toArray());
        return new DisableOrganizationsRootSessionsResponse($result->toArray());
    }
}
