<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListApplicationStates;

trait ListApplicationStatesTrait
{
    /**
     * @param ListApplicationStatesRequest $args
     * @return ListApplicationStatesResponse
     */
    public function listApplicationStates(ListApplicationStatesRequest $args)
    {
        $result = parent::listApplicationStates($args->toArray());
        return new ListApplicationStatesResponse($result->toArray());
    }
}
