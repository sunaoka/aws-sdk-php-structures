<?php

namespace Sunaoka\Aws\Structures\Iam\EnableOrganizationsRootSessions;

trait EnableOrganizationsRootSessionsTrait
{
    /**
     * @param EnableOrganizationsRootSessionsRequest $args
     * @return EnableOrganizationsRootSessionsResponse
     */
    public function enableOrganizationsRootSessions(EnableOrganizationsRootSessionsRequest $args)
    {
        $result = parent::enableOrganizationsRootSessions($args->toArray());
        return new EnableOrganizationsRootSessionsResponse($result->toArray());
    }
}
