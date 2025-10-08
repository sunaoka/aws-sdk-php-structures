<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceStates;

trait ListServiceStatesTrait
{
    /**
     * @param ListServiceStatesRequest $args
     * @return ListServiceStatesResponse
     */
    public function listServiceStates(ListServiceStatesRequest $args)
    {
        $result = parent::listServiceStates($args->toArray());
        return new ListServiceStatesResponse($result->toArray());
    }
}
