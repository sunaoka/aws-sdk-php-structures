<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxEnvironments;

trait ListKxEnvironmentsTrait
{
    /**
     * @param ListKxEnvironmentsRequest $args
     * @return ListKxEnvironmentsResponse
     */
    public function listKxEnvironments(ListKxEnvironmentsRequest $args)
    {
        $result = parent::listKxEnvironments($args->toArray());
        return new ListKxEnvironmentsResponse($result->toArray());
    }
}
