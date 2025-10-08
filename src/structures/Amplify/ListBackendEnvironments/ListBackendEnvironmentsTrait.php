<?php

namespace Sunaoka\Aws\Structures\Amplify\ListBackendEnvironments;

trait ListBackendEnvironmentsTrait
{
    /**
     * @param ListBackendEnvironmentsRequest $args
     * @return ListBackendEnvironmentsResponse
     */
    public function listBackendEnvironments(ListBackendEnvironmentsRequest $args)
    {
        $result = parent::listBackendEnvironments($args->toArray());
        return new ListBackendEnvironmentsResponse($result->toArray());
    }
}
