<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedQuery;

trait GetProtectedQueryTrait
{
    /**
     * @param GetProtectedQueryRequest $args
     * @return GetProtectedQueryResponse
     */
    public function getProtectedQuery(GetProtectedQueryRequest $args)
    {
        $result = parent::getProtectedQuery($args->toArray());
        return new GetProtectedQueryResponse($result->toArray());
    }
}
