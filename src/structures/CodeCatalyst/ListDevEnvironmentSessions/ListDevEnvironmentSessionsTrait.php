<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironmentSessions;

trait ListDevEnvironmentSessionsTrait
{
    /**
     * @param ListDevEnvironmentSessionsRequest $args
     * @return ListDevEnvironmentSessionsResponse
     */
    public function listDevEnvironmentSessions(ListDevEnvironmentSessionsRequest $args)
    {
        $result = parent::listDevEnvironmentSessions($args->toArray());
        return new ListDevEnvironmentSessionsResponse($result->toArray());
    }
}
