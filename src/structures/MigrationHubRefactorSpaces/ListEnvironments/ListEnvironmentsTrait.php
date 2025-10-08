<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListEnvironments;

trait ListEnvironmentsTrait
{
    /**
     * @param ListEnvironmentsRequest $args
     * @return ListEnvironmentsResponse
     */
    public function listEnvironments(ListEnvironmentsRequest $args)
    {
        $result = parent::listEnvironments($args->toArray());
        return new ListEnvironmentsResponse($result->toArray());
    }
}
