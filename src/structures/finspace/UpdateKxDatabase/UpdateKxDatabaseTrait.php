<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxDatabase;

trait UpdateKxDatabaseTrait
{
    /**
     * @param UpdateKxDatabaseRequest $args
     * @return UpdateKxDatabaseResponse
     */
    public function updateKxDatabase(UpdateKxDatabaseRequest $args)
    {
        $result = parent::updateKxDatabase($args->toArray());
        return new UpdateKxDatabaseResponse($result->toArray());
    }
}
