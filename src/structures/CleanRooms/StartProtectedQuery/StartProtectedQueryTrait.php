<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery;

trait StartProtectedQueryTrait
{
    /**
     * @param StartProtectedQueryRequest $args
     * @return StartProtectedQueryResponse
     */
    public function startProtectedQuery(StartProtectedQueryRequest $args)
    {
        $result = parent::startProtectedQuery($args->toArray());
        return new StartProtectedQueryResponse($result->toArray());
    }
}
