<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetGremlinQueryStatus;

trait GetGremlinQueryStatusTrait
{
    /**
     * @param GetGremlinQueryStatusRequest $args
     * @return GetGremlinQueryStatusResponse
     */
    public function getGremlinQueryStatus(GetGremlinQueryStatusRequest $args)
    {
        $result = parent::getGremlinQueryStatus($args->toArray());
        return new GetGremlinQueryStatusResponse($result->toArray());
    }
}
