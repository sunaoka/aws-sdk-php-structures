<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteDatabase;

trait DeleteDatabaseTrait
{
    /**
     * @param DeleteDatabaseRequest $args
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabase(DeleteDatabaseRequest $args)
    {
        $result = parent::deleteDatabase($args->toArray());
        return new DeleteDatabaseResponse($result->toArray());
    }
}
