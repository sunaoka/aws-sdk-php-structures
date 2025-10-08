<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery;

trait UpdateProtectedQueryTrait
{
    /**
     * @param UpdateProtectedQueryRequest $args
     * @return UpdateProtectedQueryResponse
     */
    public function updateProtectedQuery(UpdateProtectedQueryRequest $args)
    {
        $result = parent::updateProtectedQuery($args->toArray());
        return new UpdateProtectedQueryResponse($result->toArray());
    }
}
