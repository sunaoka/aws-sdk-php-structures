<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteAllEntitySessions;

trait DeleteAllEntitySessionsTrait
{
    /**
     * @param DeleteAllEntitySessionsRequest $args
     * @return DeleteAllEntitySessionsResponse
     */
    public function deleteAllEntitySessions(DeleteAllEntitySessionsRequest $args)
    {
        $result = parent::deleteAllEntitySessions($args->toArray());
        return new DeleteAllEntitySessionsResponse($result->toArray());
    }
}
