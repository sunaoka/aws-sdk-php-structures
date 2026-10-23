<?php

namespace Sunaoka\Aws\Structures\Continuum\ListAssociatedEnvironments;

trait ListAssociatedEnvironmentsTrait
{
    /**
     * @param ListAssociatedEnvironmentsRequest $args
     * @return ListAssociatedEnvironmentsResponse
     */
    public function listAssociatedEnvironments(ListAssociatedEnvironmentsRequest $args)
    {
        $result = parent::listAssociatedEnvironments($args->toArray());
        return new ListAssociatedEnvironmentsResponse($result->toArray());
    }
}
