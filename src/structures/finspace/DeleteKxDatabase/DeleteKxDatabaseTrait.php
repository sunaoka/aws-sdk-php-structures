<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxDatabase;

trait DeleteKxDatabaseTrait
{
    /**
     * @param DeleteKxDatabaseRequest $args
     * @return DeleteKxDatabaseResponse
     */
    public function deleteKxDatabase(DeleteKxDatabaseRequest $args)
    {
        $result = parent::deleteKxDatabase($args->toArray());
        return new DeleteKxDatabaseResponse($result->toArray());
    }
}
