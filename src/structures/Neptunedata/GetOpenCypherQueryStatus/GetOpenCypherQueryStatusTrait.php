<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetOpenCypherQueryStatus;

trait GetOpenCypherQueryStatusTrait
{
    /**
     * @param GetOpenCypherQueryStatusRequest $args
     * @return GetOpenCypherQueryStatusResponse
     */
    public function getOpenCypherQueryStatus(GetOpenCypherQueryStatusRequest $args)
    {
        $result = parent::getOpenCypherQueryStatus($args->toArray());
        return new GetOpenCypherQueryStatusResponse($result->toArray());
    }
}
