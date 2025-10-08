<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteRelationalDatabase;

trait DeleteRelationalDatabaseTrait
{
    /**
     * @param DeleteRelationalDatabaseRequest $args
     * @return DeleteRelationalDatabaseResponse
     */
    public function deleteRelationalDatabase(DeleteRelationalDatabaseRequest $args)
    {
        $result = parent::deleteRelationalDatabase($args->toArray());
        return new DeleteRelationalDatabaseResponse($result->toArray());
    }
}
