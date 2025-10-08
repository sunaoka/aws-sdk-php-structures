<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironments;

trait ListDevEnvironmentsTrait
{
    /**
     * @param ListDevEnvironmentsRequest $args
     * @return ListDevEnvironmentsResponse
     */
    public function listDevEnvironments(ListDevEnvironmentsRequest $args)
    {
        $result = parent::listDevEnvironments($args->toArray());
        return new ListDevEnvironmentsResponse($result->toArray());
    }
}
