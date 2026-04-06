<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceDependents;

trait ListServiceDependentsTrait
{
    /**
     * @param ListServiceDependentsRequest $args
     * @return ListServiceDependentsResponse
     */
    public function listServiceDependents(ListServiceDependentsRequest $args)
    {
        $result = parent::listServiceDependents($args->toArray());
        return new ListServiceDependentsResponse($result->toArray());
    }
}
