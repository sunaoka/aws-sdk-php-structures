<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDatabase;

trait UpdateDatabaseTrait
{
    /**
     * @param UpdateDatabaseRequest $args
     * @return UpdateDatabaseResponse
     */
    public function updateDatabase(UpdateDatabaseRequest $args)
    {
        $result = parent::updateDatabase($args->toArray());
        return new UpdateDatabaseResponse($result->toArray());
    }
}
